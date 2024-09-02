Set-ExecutionPolicy Bypass
$complower = $env:computername.ToLower()
choco install saltminion --yes --no-progress -r --installargs "/S /minion-name=$complower /master=saltmaster1.dzsnet.com,saltmaster2.dzsnet.com,saltmaster3.dzsnet.com /start-service=1"