#include <TroykaDHT.h>

DHT dht(2, DHT11);
int x;
float hum;
float temp;
boolean dht_x = false;

void setup() {
  Serial.begin(9600);
  dht.begin();
  while (!Serial) {
    ; // wait for serial port to initialize
  }

}

void loop() {
  while (!Serial.available());
  x = Serial.read();

  switch (x) {
  case 's':
    
    //Serial.print((String) temp  + ",");
   Serial.print((String) temp  + ",");
   Serial.print((String) hum  + ",");
   Serial.print("2,");
   Serial.print("3,");
   Serial.print("4,");
   Serial.print("5,");
   Serial.print("6,");
   Serial.print("7,");
   Serial.print("8,");
   Serial.print("9,");
   Serial.print("10,");
   Serial.print("11,");
   Serial.print("12,");
   Serial.print("13,");
   Serial.print("14,");
   Serial.print("15,");
   Serial.print("16,");
   Serial.print("17,");
   Serial.print("18,");
   Serial.print("19,");

              
    break;
  default:
    //do nothing
    break;
  }

  //DHT CODE
  dht.read();
  switch (dht.getState()) {
    // всё OK
  case DHT_OK:
    hum = dht.getHumidity();
    temp = dht.getTemperatureC();
    dht_x = true;
    break;
  case DHT_ERROR_CHECKSUM:
    //Serial.println(" / Checksum error");        
    dht_x = false;
    break;
  case DHT_ERROR_TIMEOUT:
    //Serial.println(" / Time out error");          
    dht_x = false;
    break;
  case DHT_ERROR_NO_REPLY:
    //Serial.println(" / DHTxx Sensor not connected");
    dht_x = false;
    break;
  }

//Serial.println("test");  


}
