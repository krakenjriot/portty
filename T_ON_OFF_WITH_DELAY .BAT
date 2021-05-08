c:
cd c:\tmp\

REM turn on pin 8
porttymod.exe b1 8 1

timeout /t 5 /nobreak


REM turn off pin 8
porttymod.exe b1 8 0

PAUSE