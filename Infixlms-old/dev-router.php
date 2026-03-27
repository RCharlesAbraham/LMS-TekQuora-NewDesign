<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');
$file = __DIR__ . $uri;

// Let PHP built-in server serve existing static files directly.
if ($uri !== '/' && is_file($file)) {
    return false;
}

require __DIR__ . '/public/index.php';
