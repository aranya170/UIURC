<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <div class="container mx-auto p-4">


        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <!-- Author, Date, and Tags -->
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4">
                <div class="text-sm text-gray-600 mb-2 sm:mb-0">
                    <span>By <span class="font-medium text-gray-800">Aranya Kishor Das</span></span>
                    <span class="mx-2">•</span>
                    <span>Uploaded on July 19, 2025</span>
                </div>
                <div class="flex gap-2">
                    <span
                        class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">IoT</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">ESP
                        Projects</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-green-800 mb-6">
                Building a Smart Plant Monitoring System with ESP8266
            </h1>

            <p class="text-gray-700 mb-4">
                In this blog, we'll guide you through creating a smart plant monitoring system
                using an ESP8266 (e.g., NodeMCU). This system monitors soil moisture, temperature, and humidity, sending
                data to a web interface for real-time tracking. We'll use a NodeMCU ESP8266, a DHT11 sensor, and a soil
                moisture sensor, styled with Tailwind CSS for a clean look.
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Components Needed</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>NodeMCU ESP8266</li>
                <li>DHT11 Temperature and Humidity Sensor</li>
                <li>Soil Moisture Sensor</li>
                <li>Jumper Wires</li>
                <li>Breadboard</li>
                <li>USB Cable for NodeMCU</li>
                <li>Computer with Arduino IDE</li>
            </ul>
        </section>


        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 1: Setting Up the Hardware</h2>
            <div class="flex flex-col lg:flex-row items-start gap-6">
                <!-- Image -->
                <div class="flex-1 w-full lg:w-1/2">
                    <img class="rounded-lg w-full object-contain" src="img/Blog1_diagram.png"
                        alt="Hardware Setup Diagram">
                </div>
                <!-- Text Content -->
                <div class="flex-1">
                    <ol class="list-decimal list-inside text-gray-700 space-y-4">
                        <li>
                            <strong>Connect the Soil Moisture Sensor</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>VCC to NodeMCU 3.3V</li>
                                <li>GND to NodeMCU GND</li>
                                <li>AOUT to NodeMCU A0 (D23)</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the DHT11 Sensor</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>VCC to NodeMCU 3.3V</li>
                                <li>GND to NodeMCU GND</li>
                                <li>DATA to NodeMCU D4 (GPIO 2)</li>
                            </ul>
                        </li>
                        <li>
                            Place the soil moisture sensor in the plant's soil and ensure all connections are secure.
                        </li>
                    </ol>
                </div>

            </div>
        </section>


        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 2: ESP8266 Code</h2>
            <p class="text-gray-700 mb-4">The ESP8266 code reads sensor data and sends it to a server using its built-in
                Wi-Fi. Install the <code>DHT</code> and <code>ESP8266WiFi</code> libraries in the Arduino IDE.</p>
            <pre class="bg-gray-900 text-white p-4 rounded-lg overflow-x-auto"><code>#include <ESP8266WiFi.h>
#include <DHT.h>

#define DHTPIN 2 // GPIO 2 (D4 on NodeMCU)
#define DHTTYPE DHT11
#define SOIL_PIN A0

DHT dht(DHTPIN, DHTTYPE);

const char* ssid = "YourWiFiSSID";
const char* password = "YourWiFiPassword";
const char* server = "yourserver.com";

WiFiClient client;

void setup() {
  Serial.begin(115200);
  dht.begin();
  
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
}

void loop() {
  float humidity = dht.readHumidity();
  float temperature = dht.readTemperature();
  int soilMoisture = analogRead(SOIL_PIN);
  int moisturePercent = map(soilMoisture, 1023, 0, 0, 100);

  if (client.connect(server, 80)) {
    String url = "/update?humidity=" + String(humidity) + "&temp=" + String(temperature) + "&moisture=" + String(moisturePercent);
    client.print(String("GET ") + url + " HTTP/1.1\r\n" +
                 "Host: " + server + "\r\n" +
                 "Connection: close\r\n\r\n");
    delay(1000);
    while (client.available()) {
      Serial.write(client.read());
    }
    client.stop();
  }
  delay(60000); // Send data every minute
}</code></pre>
            <p class="text-gray-700 mt-4">Replace <code>YourWiFiSSID</code>, <code>YourWiFiPassword</code>, and
                <code>yourserver.com</code> with your Wi-Fi credentials and server address.
            </p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 3: Setting Up the Web Interface</h2>
            <p class="text-gray-700 mb-4">Below is the HTML for a simple web page to display sensor data, styled with
                Tailwind CSS. The server-side logic (e.g., PHP) to receive and store data is assumed to be set up
                separately.</p>
            <pre class="bg-gray-900 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Smart Plant Monitoring&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body class="bg-gray-100 font-sans"&gt;
    &lt;div class="container mx-auto p-4"&gt;
        &lt;h1 class="text-3xl font-bold text-green-800 mb-6 text-center"&gt;Smart Plant Monitoring System&lt;/h1&gt;
        &lt;div class="grid grid-cols-1 md:grid-cols-3 gap-4"&gt;
            &lt;div class="bg-white p-6 rounded-lg shadow-lg"&gt;
                &lt;h2 class="text-xl font-semibold text-gray-800"&gt;Humidity&lt;/h2&gt;
                &lt;p class="text-2xl" id="humidity"&gt;Loading...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="bg-white p-6 rounded-lg shadow-lg"&gt;
                &lt;h2 class="text-xl font-semibold text-gray-800"&gt;Temperature&lt;/h2&gt;
                &lt;p class="text-2xl" id="temperature"&gt;Loading...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="bg-white p-6 rounded-lg shadow-lg"&gt;
                &lt;h2 class="text-xl font-semibold text-gray-800"&gt;Soil Moisture&lt;/h2&gt;
                &lt;p class="text-2xl" id="moisture"&gt;Loading...&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;script&gt;
        async function fetchData() {
            const response = await fetch('http://yourserver.com/data');
            const data = await response.json();
            document.getElementById('humidity').textContent = data.humidity + '%';
            document.getElementById('temperature').textContent = data.temperature + '°C';
            document.getElementById('moisture').textContent = data.moisture + '%';
        }
        fetchData();
        setInterval(fetchData, 60000);
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
            <p class="text-gray-700 mt-4">Replace <code>http://yourserver.com/data</code> with your server's API
                endpoint.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 4: Server Setup</h2>
            <p class="text-gray-700">Set up a server (e.g., using PHP) to receive data from the ESP8266 and serve it to
                the web interface. Ensure the server stores sensor data and provides a JSON API endpoint.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 5: Testing and Deployment</h2>
            <ol class="list-decimal list-inside text-gray-700">
                <li>Upload the ESP8266 code using the Arduino IDE and verify sensor data via the Serial Monitor.</li>
                <li>Test the web interface to ensure it displays data correctly.</li>
                <li>Deploy the server and ensure the ESP8266 connects reliably.</li>
            </ol>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Conclusion</h2>
            <p class="text-gray-700">You've now built a smart plant monitoring system using the ESP8266! Enhance it by
                adding automated watering with a relay module or alerts for low moisture levels. Experiment with
                additional sensors or integrate with a mobile app for notifications.</p>
        </section>
    </div>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>