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

Building the bundle
--------------------



Prerequisites 
============

Upload Hex File
--------------------
Inside the package there is a folder named `/hex` run the xloader.exe and select the hex file configuration that will 
match your arduino type and sensor

open the folder /xloader/
<img src="https://github.com/krakenjriot/portty/blob/main/images/xload-folder.png" width="750" /> 
run the xloader.exe
<img src="https://github.com/krakenjriot/portty/blob/main/images/xloader.png" width="750" />   





  


Basic Syntax 
============

Basic Syntax 
============


[Purpose](link)

[Scope](link)

[Work Practice](link)

[Daily Briefing](link)


Example. Arduino Uno connected to com10, b1 as board name (any name is possible)
Syntax     : portty.exe <board-name> <com-port>
Example    : portty.exe myboard com5
  
`To start the portty.exe with the above setup`

```sh
portty.exe b1 com10
```


--------------------

Building the bundle
--------------------

```sh
portty.exe b1 com10
```
 
 
 

 
 

 
