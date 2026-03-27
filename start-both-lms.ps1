$newRoot = "C:\Users\Charl\LMS-TekQuora-NewDesign"
$oldRoot = "C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old"

# Stop existing listeners on target ports.
Get-CimInstance Win32_Process |
    Where-Object { $_.Name -eq "php.exe" -and ($_.CommandLine -match "127\.0\.0\.1:8000" -or $_.CommandLine -match "127\.0\.0\.1:8001") } |
    ForEach-Object { Stop-Process -Id $_.ProcessId -Force }

Start-Process -FilePath php -ArgumentList "artisan serve --host=127.0.0.1 --port=8000" -WorkingDirectory $newRoot
Start-Process -FilePath php -ArgumentList "-d xdebug.mode=off -d opcache.enable_cli=1 -S 127.0.0.1:8001 -t $oldRoot dev-router.php" -WorkingDirectory $oldRoot

Start-Sleep -Seconds 2

$newOk = (Test-NetConnection 127.0.0.1 -Port 8000 -WarningAction SilentlyContinue).TcpTestSucceeded
$oldOk = (Test-NetConnection 127.0.0.1 -Port 8001 -WarningAction SilentlyContinue).TcpTestSucceeded

Write-Output "New (8000): $newOk"
Write-Output "Old backend (8001, from Infixlms-old): $oldOk"
Write-Output "Open http://127.0.0.1:8000/new and http://127.0.0.1:8000/old"
