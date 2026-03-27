<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';

try {
    $mysqli = new mysqli($host, $user, $pass);
    if ($mysqli->connect_errno) {
        fwrite(STDERR, "connect_errno={$mysqli->connect_errno}\n");
        exit(1);
    }

    // Try to detect whether MySQL is in read-only mode.
    $dbName = 'lms_new_xclever';
    $otherDb = 'lms_new';
    $roRow = $mysqli->query("SELECT @@read_only AS ro")->fetch_assoc();

    // Try DB creation (idempotent).
    $mysqli->query("CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

    // Try creating a temp table to verify DDL permissions.
    foreach ([$dbName, $otherDb] as $db) {
        $mysqli->select_db($db);
        $mysqli->query("DROP TABLE IF EXISTS `tmp_migrations_write_test`");
        $res = $mysqli->query("CREATE TABLE `tmp_migrations_write_test` (id INT PRIMARY KEY AUTO_INCREMENT) ENGINE=InnoDB");
        if ($res === false) {
            $err = $mysqli->error;
            fwrite(STDERR, "tmp table create failed in {$db}: {$err}\n");
            continue;
        }
        $mysqli->query("DROP TABLE `tmp_migrations_write_test`");
        fwrite(STDERR, "tmp table create ok in {$db}\n");
    }

    echo "ok db={$dbName} read_only=" . ($roRow['ro'] ?? 'null') . "\n";
} catch (Throwable $e) {
    fwrite(STDERR, $e->getMessage() . "\n");
    exit(1);
}

