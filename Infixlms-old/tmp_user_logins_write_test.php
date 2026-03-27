<?php
function envv($k,$d=null){static $e=null; if($e===null){$e=[]; foreach(file(__DIR__.'/.env', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) as $line){$line=trim($line); if($line===''||$line[0]==='#'||strpos($line,'=')===false) continue; [$kk,$vv]=explode('=',$line,2); $vv=trim($vv); if((str_starts_with($vv,'"')&&str_ends_with($vv,'"'))||(str_starts_with($vv,"'")&&str_ends_with($vv,"'"))) $vv=substr($vv,1,-1); $e[trim($kk)]=$vv; }} return $e[$k]??$d;}
$pdo=new PDO('mysql:host='.envv('DB_HOST','127.0.0.1').';port='.envv('DB_PORT','3306').';dbname='.envv('DB_DATABASE').';charset=utf8mb4',envv('DB_USERNAME'),envv('DB_PASSWORD'),[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

// direct write test: insert then delete
$cols=$pdo->query("SHOW COLUMNS FROM user_logins")->fetchAll();
$insertCols=[]; $vals=[]; $params=[];
$userId = null;
try { $u=$pdo->query("SELECT id FROM users ORDER BY id ASC LIMIT 1")->fetch(); if($u){$userId=(int)$u['id'];} } catch(Throwable $e) {}
foreach($cols as $c){
  $f=$c['Field']; $type=strtolower($c['Type']); $null=$c['Null']==='YES'; $def=$c['Default']; $extra=strtolower($c['Extra']);
  if(str_contains($extra,'auto_increment')) continue;
  if($def!==null) continue; // allow db default handling
  $insertCols[]="`$f`";
  if($null){ $vals[]="NULL"; continue; }
  $vals[]='?';
  if($f==='user_id' && $userId!==null){ $params[]=$userId; }
  elseif(preg_match('/int|decimal|float|double/', $type)){ $params[]=1; }
  elseif(preg_match('/datetime|timestamp/', $type)){ $params[]=date('Y-m-d H:i:s'); }
  elseif(preg_match('/date/', $type)){ $params[]=date('Y-m-d'); }
  else { $params[]='tmp_rw_test'; }
}
$sql='INSERT INTO user_logins ('.implode(',',$insertCols).') VALUES ('.implode(',',$vals).')';
echo "Write test SQL: $sql\n";
try{
  $st=$pdo->prepare($sql); $st->execute($params);
  $id=(int)$pdo->lastInsertId();
  echo "Write test insert: OK id=$id\n";
  if($id>0){ $d=$pdo->prepare('DELETE FROM user_logins WHERE id=?'); $d->execute([$id]); echo "Write test delete: OK id=$id\n"; }
}catch(Throwable $e){
  echo "Write test insert/delete: FAIL: ".$e->getMessage()."\n";
  if($e instanceof PDOException && isset($e->errorInfo)) echo "Write test SQLSTATE: ".json_encode($e->errorInfo,JSON_UNESCAPED_SLASHES)."\n";
}
