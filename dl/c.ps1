# DzS's install script

$hookUrl = $env:discordlink
$complower = $env:computername.ToLower()

$content = @"
$complower restarted
"@
$payload = [PSCustomObject]@{
    content = $content
}
Invoke-RestMethod -Uri $hookUrl -Method Post -ContentType 'application/json' -Body ($payload | ConvertTo-Json)

Set-ExecutionPolicy Bypass
#Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))

$complower = $env:computername.ToLower()
#choco install saltminion --yes --no-progress -r --installargs "/S /minion-name=$complower /master=dzsnet.com /start-service=1"

#echo "##### enabling FTP server `n"
#choco install IIS-FTPServer --source windowsfeatures --no-progress -y
#choco install IIS-ManagementConsole --source windowsfeatures --no-progress -y

choco upgrade all -y --no-progress -r

#choco install pswindowsupdate --no-progress -y
#Import-Module PSWindowsUpdate
echo " "
salt-call win_wua.list install=True


#c:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe Get-WUInstall -Acceptall -Verbose -IgnoreReboot -IgnoreRebootRequired
#c:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe Get-WUHistory | select -first 10

#salt-call state.apply schedule
#salt-call schedule.list
curl https://dzsnet.github.io/start/dl/c.cmd -o c:\temp\c.cmd

$hookUrl = $env:discordlink
$complower = $env:computername.ToLower()

$content = @"
$complower startup script finished
"@
$payload = [PSCustomObject]@{
    content = $content
}
Invoke-RestMethod -Uri $hookUrl -Method Post -ContentType 'application/json' -Body ($payload | ConvertTo-Json)
