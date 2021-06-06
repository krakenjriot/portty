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

[README](README.md)
============

FLASHING THE BOARD
--------------------


Upload Hex File
--------------------
Inside the package there is a folder named `hex`, inside run the xloader.exe and select the hex file that match 
the board used ( based on the above sample the board is Mega and the sensor is DHT11 and so `dht11_mega.hex`) has been selected
and for the com port (it is COM10) and baud rate (leave it as default).


<img src="https://github.com/krakenjriot/portty/blob/main/images/xload-folder.png" width="750" /> 
<img src="https://github.com/krakenjriot/portty/blob/main/images/xloader.png" width="750" />   
<img src="https://github.com/krakenjriot/portty/blob/main/images/hex-folder.png" width="750" />   
<img src="https://github.com/krakenjriot/portty/blob/main/images/select-hex.png" width="750" />   
<img src="https://github.com/krakenjriot/portty/blob/main/images/upload-completed.png" width="750" /> 