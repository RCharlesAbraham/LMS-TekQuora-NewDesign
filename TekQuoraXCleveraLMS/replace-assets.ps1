$ErrorActionPreference = "Stop"

$homeFile = "resources/views/home.blade.php"
$headerFile = "resources/views/partials/header.blade.php"

function Replace-Literal {
  param(
    [Parameter(Mandatory=$true)][string]$File,
    [Parameter(Mandatory=$true)][string]$OldValue,
    [Parameter(Mandatory=$true)][string]$NewValue
  )

  $content = Get-Content -Raw $File -Encoding UTF8
  $updated = $content.Replace($OldValue, $NewValue)
  if ($updated -ne $content) {
    Set-Content -NoNewline -Encoding UTF8 $File $updated
  }
}

# Asset base path changes for the "public/assets" folder
Replace-Literal -File $homeFile   -OldValue "asset('lms-ui/images/" -NewValue "asset('assets/images/"
Replace-Literal -File $homeFile   -OldValue "asset('lms-ui/css/"    -NewValue "asset('assets/css/"
Replace-Literal -File $headerFile -OldValue "asset('lms-ui/images/" -NewValue "asset('assets/images/"
Replace-Literal -File $headerFile -OldValue "asset('lms-ui/css/"    -NewValue "asset('assets/css/"

# Include path change (already expected, but safe)
Replace-Literal -File $homeFile -OldValue "@include('lms-ui.partials.header')" -NewValue "@include('partials.header')"

Write-Output "Asset replacements complete."

