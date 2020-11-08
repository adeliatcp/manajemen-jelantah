// deklarasi
#include <PubSubClient.h>
#include <WiFi.h>

#define WIFI_AP "Andar"
#define WIFI_PASSWORD "29091963"


// cloud
const char *server = "tailor.cloudmqtt.com";
const int mqttPort = 36503;
const char* mqttUser = "lvntsnrq";
const char* mqttPass = "79W8iNWE4G9i";


static const char alphanum[] = "0123456789"
                               "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
                               "abcdefghijklmnopqrstuvwxyz"; // For random generation of client ID.

WiFiClient client;               // Initialize the Wifi client library.
PubSubClient mqttClient(client); // Initialize the PuBSubClient library.

unsigned long lastConnectionTime = 0;
const unsigned long postingInterval = 5L * 1000L; // Post data every 5 seconds.

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  delay(10);
  // koneksi ke wifi
  InitWiFi();
  mqttClient.setServer(server, mqttPort); // Set the MQTT broker details.
}

// looping
void loop()
{
  // Reconnect if MQTT client is not connected.
  if (!mqttClient.connected())
  {
    reconnect();
  }

  mqttClient.loop(); // Call the loop continuously to establish connection to the server.

  // If interval time has passed since the last connection, Publish data to ThingSpeak
  if (millis() - lastConnectionTime > postingInterval)
  {
    mqttpublish();
  }
}


void InitWiFi()
{
  Serial.println("Connecting to AP ...");
  // attempt to connect to WiFi network

  WiFi.begin(WIFI_AP, WIFI_PASSWORD);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println("Connected to AP");
}


// NOTE method reconnect ini bukan untuk koneksi wifi, tp ke channel
void reconnect()
{
  char clientID[9];

  // Loop until we're reconnected
  while (!mqttClient.connected())
  {
    Serial.print("Attempting MQTT connection...");
    // Generate ClientID
    for (int i = 0; i < 8; i++)
    {
      clientID[i] = alphanum[random(51)];
    }
    clientID[8] = '\0';

    // NOTE Connect to the MQTT broker dengan ID dan pass
    if (mqttClient.connect(clientID, mqttUser, mqttPass))
    {
      Serial.println("connected");
    }
    else
    {
      Serial.print("failed, rc=");
      // Print to know why the connection failed.
      // See https://pubsubclient.knolleary.net/api.html#state for the failure code explanation.
      Serial.print(mqttClient.state());
      Serial.println(" try again in 5 seconds");
      delay(5000);
    }
  }
}


// NOTE method mqtt dipanggil secara periodik di method loop
void mqttpublish()
{
    float t = 80;   // Read temperature from DHT sensor.
    Serial.println(t);

    // Create a topic string and publish data to Cloudmqtt channel feed.
    
    mqttClient.publish("/cloudmqtt", "80");
    lastConnectionTime = millis();
}