Set-ExecutionPolicy Bypass
# enabling updates for Microsoft products
$mu = New-Object -ComObject Microsoft.Update.ServiceManager -Strict
$mu.AddService2("7971f918-a847-4430-9279-4a52d1efe18d",7,"")
sleep 1;