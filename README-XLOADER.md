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

[HOME](README.md)
============

FLASHING THE BOARD
============


Upload Hex File
--------------------
Inside the package there is a folder named `/hex` run the xloader.exe and select the hex file that match 
your arduino board type, com port and baud rate.

### open the folder /xloader/
<img src="https://github.com/krakenjriot/portty/blob/main/images/xload-folder.png" width="750" /> 

### run the xloader.exe
<img src="https://github.com/krakenjriot/portty/blob/main/images/xloader.png" width="750" />   

### select the hex file inside /hex folder
<img src="https://github.com/krakenjriot/portty/blob/main/images/hex-folder.png" width="750" />   
<img src="https://github.com/krakenjriot/portty/blob/main/images/select-hex.png" width="750" />   
