mkdir C:\temp
mkdir C:\salt
setx path "%path%;C:\salt"
SET "PATH=%PATH%;C:\salt"
SETX /M path "%path%;C:\Program Files\Salt Project\Salt"
echo "curl https://dzsnet.github.io/start/dl/c.cmd -o c:\temp\c.cmd"
del c:\temp\c.log && del c:\temp\c-done.log && echo %date% %time% >> c:\temp\c.log
@"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"
choco install curl --no-progress -y
choco install wget --no-progress -y
curl https://dzsnet.github.io/start/dl/c-msupd.ps1 -o c:\temp\c-msupd.ps1
curl https://dzsnet.github.io/start/dl/c-salt.ps1 -o c:\temp\c-salt.ps1
salt-call state.apply win_envvar
curl https://dzsnet.github.io/start/dl/c.ps1 -o c:\temp\c.ps1
curl https://dzsnet.github.io/start/dl/c.xml -o c:\temp\c.xml
PowerShell -ExecutionPolicy Bypass -File c:\temp\c-msupd.ps1
PowerShell -ExecutionPolicy Bypass -File c:\temp\c-salt.ps1
PowerShell -ExecutionPolicy Bypass -File c:\temp\c.ps1 >> c:\Temp\c.log
schtasks /create /xml c:\Temp\c.xml /F /tn choco
ren "C:\Temp\c.log" "c-done.log"
type c:\temp\c-done.log
salt-call cp.push C:\temp\c-done.log
