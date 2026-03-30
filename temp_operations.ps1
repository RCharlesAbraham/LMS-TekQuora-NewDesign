# 1. Delete the lms-ui folder
$lmsUiPath = "C:\Users\Charl\MMIP\LMS\LMS-TekQuora-NewDesign\resources\views\lms-ui"
if (Test-Path $lmsUiPath) {
    Remove-Item -Path $lmsUiPath -Recurse -Force
    Write-Host "Deleted: $lmsUiPath"
} else {
    Write-Host "Folder already deleted or doesn't exist: $lmsUiPath"
}

# 2. Copy contents from Infixlms-old to resources\views
$sourcePath = "C:\Users\Charl\MMIP\LMS\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\*"
$destPath = "C:\Users\Charl\MMIP\LMS\LMS-TekQuora-NewDesign\resources\views\"
Copy-Item -Path $sourcePath -Destination $destPath -Recurse -Force
Write-Host "Copied contents from Infixlms-old to resources\views"

# 3. List the contents to confirm
Write-Host "`nContents of resources\views:" -ForegroundColor Cyan
Get-ChildItem -Path $destPath -Force | Select-Object Name | Format-Table -AutoSize
