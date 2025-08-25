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
                        class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Arduino</span>
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">LED
                        Projects</span>
                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Motion
                        Sensors</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-blue-800 mb-6">Building a Motion-Activated LED Strip with LDR and PIR
            </h1>
            <p class="text-gray-700 mb-4">
                This tutorial guides you through creating a motion-activated LED strip system that activates only in
                low-light conditions, using an Arduino Uno, a PIR motion sensor, and an LDR (Light Dependent Resistor).
                Inspired by Arduino_Buzz's project, this system is perfect for energy-efficient lighting, such as
                illuminating a hallway or bathroom at night. <a
                    href="https://projecthub.arduino.cc/arduino_buzz/motion-activated-led-strip-using-ldr-and-pir-4418e7"
                    class="text-blue-600 hover:underline">Original
                    project</a>
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Components Needed</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Arduino Uno</li>
                <li>PIR Motion Sensor (e.g., HC-SR501)</li>
                <li>LDR (Light Dependent Resistor)</li>
                <li>LED Strip (e.g., WS2812B or single-color, 12V)</li>
                <li>10kΩ Resistor (for LDR)</li>
                <li>MOSFET (e.g., IRF540N) for LED strip control (if using 12V strip)</li>
                <li>Jumper Wires</li>
                <li>Breadboard</li>
                <li>USB Cable for Arduino</li>
                <li>Power Supply (5V for Arduino, 12V for LED strip if needed)</li>
            </ul>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 1: Setting Up the Hardware</h2>
            <div class="flex flex-col lg:flex-row items-start gap-6">
                <!-- Image -->
                <div class="flex-1 w-full lg:w-1/2">
                    <img class="rounded-lg w-full object-contain" src="img/blog3_diagram.png"
                        alt="Motion-Activated LED Strip Hardware Setup Diagram">
                </div>
                <!-- Text Content -->
                <div class="flex-1">
                    <ol class="list-decimal list-inside text-gray-700 space-y-4">
                        <li>
                            <strong>Connect the PIR Motion Sensor</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>VCC to Arduino 5V</li>
                                <li>GND to Arduino GND</li>
                                <li>OUT (Signal) to Arduino Pin 12</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the LDR</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>One leg to Arduino 5V</li>
                                <li>Other leg to Arduino A0 and to GND via a 10kΩ resistor (pull-down)</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the LED Strip</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>For a 12V strip: Connect the MOSFET drain to the LED strip cathode, source to GND,
                                    and gate to Arduino Pin 8 via a 220Ω resistor</li>
                                <li>LED strip anode to 12V power supply</li>
                                <li>Connect power supply GND to Arduino GND</li>
                                <li>For a WS2812B strip: Connect DIN to Arduino Pin 8, VCC to 5V, GND to Arduino GND
                                </li>
                            </ul>
                        </li>
                        <li>Secure all connections and position the PIR sensor to detect motion in the desired area.
                            Ensure the LDR is exposed to ambient light.</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 2: Arduino Code</h2>
            <p class="text-gray-700 mb-4">The Arduino code activates the LED strip when motion is detected by the PIR
                sensor and the ambient light level is low, as measured by the LDR. No external libraries are required.
            </p>
            <pre class="bg-gray-900 text-white p-4 rounded-lg overflow-x-auto"><code>const int PIR_PIN = 12; // PIR sensor pin
const int LED_PIN = 8;  // LED strip pin
const int LDR_PIN = A0; // LDR sensor pin

// Timing constants
const int TIMEOUT = 5000; // 5 seconds timeout
const int CHECK_TIME = 4000; // Check at 4 seconds
const int DEBOUNCE_TIME = 200; // Debounce time
const int DEBOUNCE_READS = 3; // Number of debounce readings
const int LDR_CHECK_INTERVAL = 1000; // Check light every 1 second

// LDR constants
const int numReadings = 3; // Moving average window size
const int hysteresis = 20; // Hysteresis to prevent flickering
const int LDR_FAST_INTERVAL = 1000; // Check light every 1 second when dark
const int LDR_SLOW_INTERVAL = 10000; // Check light every 10 seconds when bright
const int LIGHT_HISTORY_THRESHOLD = 5; // Consecutive light readings for slow mode

// State variables
int consecutiveLightReadings = 0;
int currentLdrInterval = LDR_FAST_INTERVAL;
bool motionDetected = false;
unsigned long motionStartTime = 0;
unsigned long lastLdrCheck = 0;
int ldrReadings[numReadings]; // Array for LDR readings
int readIndex = 0;
int ldrTotal = 0;
int ldrAverage = 0;
int ldrThreshold = 0; // Set during calibration
bool isDark = false;
bool ledsEnabled = false;

void setup() {
  pinMode(PIR_PIN, INPUT);
  pinMode(LED_PIN, OUTPUT);
  digitalWrite(LED_PIN, LOW);
  Serial.begin(9600);
  
  // Initialize LDR readings array
  for (int i = 0; i < numReadings; i++) {
    ldrReadings[i] = 0;
  }
  
  // Calibrate LDR threshold
  for (int i = 0; i < numReadings; i++) {
    ldrTotal += analogRead(LDR_PIN);
    delay(100);
  }
  ldrThreshold = ldrTotal / numReadings;
}

void loop() {
  // Read PIR sensor
  int pirValue = digitalRead(PIR_PIN);
  bool currentMotion = false;
  
  // Debounce PIR
  if (pirValue == HIGH) {
    int count = 0;
    for (int i = 0; i < DEBOUNCE_READS; i++) {
      if (digitalRead(PIR_PIN) == HIGH) count++;
      delay(DEBOUNCE_TIME / DEBOUNCE_READS);
    }
    if (count >= DEBOUNCE_READS) {
      currentMotion = true;
    }
  }
  
  // Update motion state
  if (currentMotion && !motionDetected) {
    motionDetected = true;
    motionStartTime = millis();
    Serial.println("Motion Detected");
  } else if (!currentMotion && motionDetected && (millis() - motionStartTime >= CHECK_TIME)) {
    motionDetected = false;
    Serial.println("Motion Ceased");
  }
  
  // Read LDR
  if (millis() - lastLdrCheck >= currentLdrInterval) {
    ldrTotal -= ldrReadings[readIndex];
    ldrReadings[readIndex] = analogRead(LDR_PIN);
    ldrTotal += ldrReadings[readIndex];
    readIndex = (readIndex + 1) % numReadings;
    ldrAverage = ldrTotal / numReadings;
    
    // Update light state
    if (ldrAverage < ldrThreshold - hysteresis) {
      isDark = true;
      consecutiveLightReadings = 0;
      currentLdrInterval = LDR_FAST_INTERVAL;
    } else if (ldrAverage > ldrThreshold + hysteresis) {
      consecutiveLightReadings++;
      if (consecutiveLightReadings >= LIGHT_HISTORY_THRESHOLD) {
        isDark = false;
        currentLdrInterval = LDR_SLOW_INTERVAL;
      }
    }
    lastLdrCheck = millis();
  }
  
  // Control LEDs
  if (motionDetected && isDark && !ledsEnabled) {
    digitalWrite(LED_PIN, HIGH);
    ledsEnabled = true;
    ledOnTime = millis();
  } else if (ledsEnabled && (!motionDetected || !isDark || (millis() - ledOnTime >= TIMEOUT))) {
    digitalWrite(LED_PIN, LOW);
    ledsEnabled = false;
  }
}</code></pre>
            <p class="text-gray-700 mt-4">Upload this code to your Arduino Uno using the Arduino IDE. The code
                calibrates the LDR threshold during setup and uses a moving average to smooth readings, preventing
                flickering.</p>
            [](https://projecthub.arduino.cc/arduino_buzz/motion-activated-led-strip-using-ldr-and-pir-4418e7)
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 3: Using the Motion-Activated LED Strip</h2>
            <p class="text-gray-700 mb-4">Once the code is uploaded and the hardware is connected, the LED strip will
                activate under specific conditions:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Motion Detection</strong>: The PIR sensor triggers when motion is detected within its range
                    (adjustable via sensitivity potentiometer on the sensor).</li>
                <li><strong>Low Light</strong>: The LDR ensures the LED strip only turns on in dark conditions, based on
                    a calibrated threshold.</li>
                <li><strong>Timeout</strong>: The LEDs turn off after 5 seconds of no motion or if light levels
                    increase.</li>
                <li>Position the PIR sensor to detect motion in the target area (e.g., a hallway) and the LDR to sense
                    ambient light accurately.</li>
            </ul>
            <p class="text-gray-700 mt-4">The system is ideal for automatic lighting in low-light areas, such as
                stairwells or bathrooms at night.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 4: Testing and Troubleshooting</h2>
            <ol class="list-decimal list-inside text-gray-700">
                <li>Upload the code and open the Serial Monitor (9600 baud) to verify motion detection and light level
                    readings.</li>
                <li>Test the PIR sensor by moving in its range; check that the LED strip activates only in low light
                    (cover the LDR to simulate darkness).</li>
                <li>Adjust the PIR sensor's sensitivity and time delay potentiometers if the detection range or duration
                    is not suitable.</li>
                <li>If the LEDs dont light up, verify connections, ensure the power supply matches the LED strip
                    voltage, and check the <code>ldrThreshold</code> value in the Serial Monitor.</li>
                <li>Ensure the LDR is not obstructed and is positioned to detect ambient light accurately.</li>
            </ol>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Conclusion</h2>
            <p class="text-gray-700">You've built a motion-activated LED strip system that activates only in low-light
                conditions using an Arduino, PIR sensor, and LDR! Enhance it by adding multiple PIR sensors for larger
                areas, using a WS2812B strip for color effects, or integrating a Wi-Fi module for remote monitoring.
                Experiment with different timeout durations or add a manual override switch for flexibility.</p>
        </section>
    </div>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>