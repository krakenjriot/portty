<p align="center">
  <img src="https://github.com/krakenjriot/portty/blob/main/images/portty.png">
</p>

Sample Setup
============



| BOARD TYPE | BOAD NAME | COM # | 
| --------------- | --------------- | --------------- | 
| UNO     | MYBOARD | COM10 | 

| COMPONENT  |  LED + | LED - |
| --------------- | --------------- |  --------------- | 
| LED     | 13 | GND |


| COMPONENT	|  DATA | VCC	|	GND |
| --------------- | --------------- |  --------------- |   --------------- | 
| DHT11     | 2 | 5V | GND |


<img src="https://github.com/krakenjriot/portty/blob/main/images/led-sample.png" width="750" />    

Introduction 
============

Command Line Applications
--------------------
- portty.exe
- porttymon.exe
- porttymod.exe
- porttysen.exe

Prerequisites 
--------------------
- Upload the PORTTY Hex file  ([show me how](README-XLOADER.md))

PORTTY.exe
--------------------

- Syntax     : `portty.exe <board-name> <com-port>`
- Example    : `portty.exe MYBOARD com10`
  
To start the portty.exe with the above sample setup

```sh
portty.exe MYBOARD com10
```

Output of the above command
--------------------

```sh
Usage      : Internet of Things Trainer Application
Application: PORTTY
Version    : v1.0
Board Type : Arduino Uno
Licence    : MIT

Status     : Connected
Serial Port: com10
Baud Rate  : 9600
Board Alias: MYBOARD

Help       : ?
Exit       : x

Toggle Pin Number:
```

Let's test it now!
--------------------

Type `13` and press Enter key twice to toggle `ON` LED (`Pin 13`)

```sh
Usage      : Internet of Things Trainer Application
Application: PORTTY
Version    : v1.0
Board Type : Arduino Uno
Licence    : MIT

Status     : Connected
Serial Port: com10
Baud Rate  : 9600
Board Alias: MYBOARD

Help       : ?
Exit       : x

Toggle Pin Number: 13
```

The pin 13 should be lit (`ON`) now

Type the same pin number will reverse the status of the pin
so typing `13` again will turn `OFF` the LED (`pin 13`)

And if you want to know the sensor reading, typing t or h will give you temperature or humidity reading of the `DHT11` sensor connected
 
That's it. Enjoy PORTTYing! 
 

 
 

 
