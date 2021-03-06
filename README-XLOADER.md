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

UPLOAD THE PORTTY HEX FILE (FLASHING THE BOARD)
--------------------

#### Uploading the hex file will convert your Arduno board into a `switch board`, pin 4 to 19 can be use for switching LED (for testing) or switching relays
- Pins 0 - 3 are reserved pins and cannot be used for switching

Let's start flashing now!
--------------------
* Download the package and extract
* Inside the package there is a folder named `xloader`, in it the applicaiton `xloader.exe` is located.
	<img src="https://github.com/krakenjriot/portty/blob/main/images/xload-folder.png" width="750" /> 
* Select and right-click to run it as administrator
	<img src="https://github.com/krakenjriot/portty/blob/main/images/right-click-admin.png" width="750" /> 
* Once its opened click the three dotted button, and look for the hex that match
the board and sensor type, to find the hex file go back the directory and look for the folder named `hex` 
( based on the above sample the board is Mega and the sensor is DHT11 and so `dht11_mega.hex` is selected) 
* and for the com port (it is COM10) and baud rate (leave it as default)

* Once all settings are confirmed correct 

* Click upload and wait to complete


	
	<img src="https://github.com/krakenjriot/portty/blob/main/images/xloader.png" width="750" />   
	<img src="https://github.com/krakenjriot/portty/blob/main/images/hex-folder.png" width="750" />   
	<img src="https://github.com/krakenjriot/portty/blob/main/images/select-hex.png" width="750" />   
	<img src="https://github.com/krakenjriot/portty/blob/main/images/upload-completed.png" width="750" /> 
* If you did not recieve any error then the upload is completed
