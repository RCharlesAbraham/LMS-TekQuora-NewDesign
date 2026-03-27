<?php
$env=[];
foreach (file(__DIR__.'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line){
  $line=trim($line); if($line===''||$line[0]==='#'||strpos($line,'=')===false) continue;
  [$k,$v]=explode('=',$line,2); $v=trim($v);
  if((str_starts_with($v,'"')&&str_ends_with($v,'"'))||(str_starts_with($v,"'")&&str_ends_with($v,"'"))) $v=substr($v,1,-1);
  $env[trim($k)]=$v;
}
$pdo=new PDO(sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',$env['DB_HOST']??'127.0.0.1',$env['DB_PORT']??'3306',$env['DB_DATABASE']??''),$env['DB_USERNAME']??'',$env['DB_PASSWORD']??'',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
echo "Connected: OK\n";

$flags=['global_read_only'=>null,'global_super_read_only'=>null,'session_tx_read_only'=>null,'session_tx_read_only_var'=>null];
$g=$pdo->query("SELECT @@global.read_only AS ro, @@global.super_read_only AS sro")->fetch();
$flags['global_read_only']=$g['ro']??null; $flags['global_super_read_only']=$g['sro']??null;
foreach(['@@session.tx_read_only','@@session.transaction_read_only','@@tx_read_only'] as $var){
  try{ $r=$pdo->query("SELECT $var AS v")->fetch(); $flags['session_tx_read_only']=$r['v']; $flags['session_tx_read_only_var']=$var; break; }catch(Throwable $e){}
}
echo "Server flags: ".json_encode($flags,JSON_UNESCAPED_SLASHES)."\n";

$status=$pdo->query("SHOW TABLE STATUS LIKE 'user_logins'")->fetch();
if(!$status){ echo "Table status: user_logins not found\n"; exit(0);} 
$statusOut=['Name'=>$status['Name']??null,'Engine'=>$status['Engine']??null,'Rows'=>$status['Rows']??null,'Create_options'=>$status['Create_options']??null,'Comment'=>$status['Comment']??null];
echo "Table status: ".json_encode($statusOut,JSON_UNESCAPED_SLASHES)."\n";

$create=$pdo->query("SHOW CREATE TABLE user_logins")->fetch();
echo "Create table (first 260 chars): ".substr(preg_replace('/\s+/',' ',$create['Create Table']??''),0,260)."...\n";

$pkCol=null; foreach($pdo->query("SHOW COLUMNS FROM user_logins")->fetchAll() as $col){ if(($col['Key']??'')==='PRI'){ $pkCol=$col['Field']; break; }}
if(!$pkCol){ echo "Write test initial: skipped (no primary key)\n"; exit(0);} 
$row=$pdo->query("SELECT `$pkCol` AS pk FROM user_logins LIMIT 1")->fetch();
if(!$row){ echo "Write test initial: skipped (no rows for safe update)\n"; exit(0);} 
try{
  $stmt=$pdo->prepare("UPDATE user_logins SET `$pkCol`=`$pkCol` WHERE `$pkCol`=:id");
  $stmt->execute([':id'=>$row['pk']]);
  echo "Write test initial: OK\n";
}catch(Throwable $e){
  echo "Write test initial: FAIL: ".$e->getMessage()."\n";
  if($e instanceof PDOException && isset($e->errorInfo)) echo "Write test SQLSTATE: ".json_encode($e->errorInfo,JSON_UNESCAPED_SLASHES)."\n";
}
