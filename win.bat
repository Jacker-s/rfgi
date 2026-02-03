# Caminho padrão do Office (ajuste se necessário)
$officePath = "C:\Program Files\Microsoft Office\root\Office16"

# Lista de apps
$apps = @(
    "WINWORD.EXE",
    "EXCEL.EXE",
    "POWERPNT.EXE",
    "OUTLOOK.EXE",
    "ONENOTE.EXE"
)

foreach ($app in $apps) {
    $file = Join-Path $officePath $app

    if (Test-Path $file) {
        Rename-Item $file "$app.disabled" -Force
        Write-Host "$app bloqueado"
    }
}
