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
    <br>
    <br>
    <br>

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
                    <span
                        class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Bluetooth</span>
                    <span
                        class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Robotics</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-blue-800 mb-6">Building a Bluetooth-Controlled Car with Arduino and HC-05
                Module</h1>
            <p class="text-gray-700 mb-4">
                This tutorial guides you through creating a Bluetooth-controlled car using an Arduino Uno and an HC-05
                Bluetooth module. Inspired by Ameya Angadi's project, this car can be controlled wirelessly via a
                smartphone, making it a fun and educational robotics project. <a
                    href="https://projecthub.arduino.cc/angadiameya007/bluetooth-controlled-car-with-hc-05-module-e90493"
                    class="text-blue-600 hover:underline">Original
                    project</a>
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Components Needed</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Arduino Uno</li>
                <li>HC-05 Bluetooth Module</li>
                <li>L298N Motor Driver</li>
                <li>4 DC Motors with Wheels</li>
                <li>Chassis for the Car</li>
                <li>Jumper Wires</li>
                <li>Breadboard</li>
                <li>9V Battery (or 12V power source for motors)</li>
                <li>USB Cable for Arduino</li>
                <li>Smartphone with Bluetooth RC Controller App (e.g., from Google Play Store)</li>
            </ul>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 1: Setting Up the Hardware</h2>
            <div class="flex flex-col lg:flex-row items-start gap-6">
                <!-- Image -->
                <div class="flex-1 w-full lg:w-1/2">
                    <img class="rounded-lg w-full object-contain" src="img/blog4_diagram.png"
                        alt="Bluetooth-Controlled Car Hardware Setup Diagram">
                </div>
                <!-- Text Content -->
                <div class="flex-1">
                    <ol class="list-decimal list-inside text-gray-700 space-y-4">
                        <li>
                            <strong>Assemble the Car Chassis</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>Attach the four DC motors with wheels to the chassis corners.</li>
                                <li>Secure the Arduino Uno and breadboard to the chassis.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the L298N Motor Driver</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>Connect Motor A (left motors) to OUT1 and OUT2 on the L298N.</li>
                                <li>Connect Motor B (right motors) to OUT3 and OUT4 on the L298N.</li>
                                <li>Connect IN1 to Arduino Pin 13, IN2 to Pin 12, IN3 to Pin 11, IN4 to Pin 10.</li>
                                <li>Connect L298N VCC to 9V/12V battery, GND to Arduino GND and battery GND.</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the HC-05 Bluetooth Module</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>VCC to Arduino 5V</li>
                                <li>GND to Arduino GND</li>
                                <li>TX to Arduino Pin 3 (RX, via SoftwareSerial)</li>
                                <li>RX to Arduino Pin 2 (TX, via voltage divider to step down 5V to 3.3V)</li>
                            </ul>
                        </li>
                        <li>Secure all connections and ensure the battery is connected to power the motors and Arduino.
                        </li>
                    </ol>
                    <p class="text-gray-700 mt-4">Note: Connect the HC-05 module after uploading the code to avoid
                        errors.</p>
                </div>
            </div>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 2: Arduino Code</h2>
            <p class="text-gray-700 mb-4">The Arduino code receives commands from a smartphone via the HC-05 Bluetooth
                module and controls the DC motors using the L298N driver. Install the <code>SoftwareSerial</code>
                library in the Arduino IDE.</p>
            <pre class="bg-gray-900 text-white p-4 rounded-lg overflow-x-auto"><code>#include <SoftwareSerial.h>

// Define pins for motor driver
#define LEFT_MOTOR_FORWARD 13
#define LEFT_MOTOR_REVERSE 12
#define RIGHT_MOTOR_FORWARD 11
#define RIGHT_MOTOR_REVERSE 10

// Define pins for Bluetooth module
#define BT_RX 3
#define BT_TX 2

SoftwareSerial bluetooth(BT_RX, BT_TX); // RX, TX

char command;

void setup() {
  // Set motor pins as outputs
  pinMode(LEFT_MOTOR_FORWARD, OUTPUT);
  pinMode(LEFT_MOTOR_REVERSE, OUTPUT);
  pinMode(RIGHT_MOTOR_FORWARD, OUTPUT);
  pinMode(RIGHT_MOTOR_REVERSE, OUTPUT);
  
  // Initialize serial communications
  Serial.begin(9600);
  bluetooth.begin(9600);
  
  // Ensure motors are off initially
  digitalWrite(LEFT_MOTOR_FORWARD, LOW);
  digitalWrite(LEFT_MOTOR_REVERSE, LOW);
  digitalWrite(RIGHT_MOTOR_FORWARD, LOW);
  digitalWrite(RIGHT_MOTOR_REVERSE, LOW);
}

void loop() {
  if (bluetooth.available()) {
    command = bluetooth.read();
    Serial.println(command); // For debugging
    
    // Stop the car
    if (command == 'S') {
      digitalWrite(LEFT_MOTOR_FORWARD, LOW);
      digitalWrite(LEFT_MOTOR_REVERSE, LOW);
      digitalWrite(RIGHT_MOTOR_FORWARD, LOW);
      digitalWrite(RIGHT_MOTOR_REVERSE, LOW);
    }
    // Move forward
    else if (command == 'F') {
      digitalWrite(LEFT_MOTOR_FORWARD, HIGH);
      digitalWrite(LEFT_MOTOR_REVERSE, LOW);
      digitalWrite(RIGHT_MOTOR_FORWARD, HIGH);
      digitalWrite(RIGHT_MOTOR_REVERSE, LOW);
    }
    // Move backward
    else if (command == 'B') {
      digitalWrite(LEFT_MOTOR_FORWARD, LOW);
      digitalWrite(LEFT_MOTOR_REVERSE, HIGH);
      digitalWrite(RIGHT_MOTOR_FORWARD, LOW);
      digitalWrite(RIGHT_MOTOR_REVERSE, HIGH);
    }
    // Turn left
    else if (command == 'L') {
      digitalWrite(LEFT_MOTOR_FORWARD, LOW);
      digitalWrite(LEFT_MOTOR_REVERSE, HIGH);
      digitalWrite(RIGHT_MOTOR_FORWARD, HIGH);
      digitalWrite(RIGHT_MOTOR_REVERSE, LOW);
    }
    // Turn right
    else if (command == 'R') {
      digitalWrite(LEFT_MOTOR_FORWARD, HIGH);
      digitalWrite(LEFT_MOTOR_REVERSE, LOW);
      digitalWrite(RIGHT_MOTOR_FORWARD, LOW);
      digitalWrite(RIGHT_MOTOR_REVERSE, HIGH);
    }
  }
}</code></pre>
            <p class="text-gray-700 mt-4">Upload this code to your Arduino Uno using the Arduino IDE. Ensure the HC-05
                is disconnected during upload to avoid errors.</p>
            [](https://projecthub.arduino.cc/angadiameya007/876cd251-ae53-44a4-92e9-a1444153e343)
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 3: Using the Bluetooth-Controlled Car</h2>
            <p class="text-gray-700 mb-4">Once the code is uploaded and the hardware is connected, you can control the
                car using a smartphone:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Install a Bluetooth RC App</strong>: Download an app like "Bluetooth RC Controller" from the
                    Google Play Store.</li>[](https://github.com/DevelopedByAnurag/arduino-bluetooth-car)
                <li><strong>Pair the HC-05</strong>: In your smartphone's Bluetooth settings, pair with the HC-05 module
                    (default PIN is usually 1234 or 0000).</li>
                <li><strong>Control the Car</strong>: Use the app to send commands:
                    <ul class="list-disc list-inside ml-4">
                        <li>'F': Move forward</li>
                        <li>'B': Move backward</li>
                        <li>'L': Turn left</li>
                        <li>'R': Turn right</li>
                        <li>'S': Stop</li>
                    </ul>
                </li>
                <li>Place the car on a flat surface and test its movement in an open area.</li>
            </ul>
            <p class="text-gray-700 mt-4">Ensure the HC-05 is within 10 meters of the smartphone for reliable Bluetooth
                communication.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 4: Testing and Troubleshooting</h2>
            <ol class="list-decimal list-inside text-gray-700">
                <li>Upload the code and open the Serial Monitor (9600 baud) to verify Bluetooth commands are received.
                </li>
                <li>Test the motors by directly powering the L298N to ensure they work independently.</li>
                <li>Check Bluetooth connectivity by pairing with the HC-05 and sending commands via the app.</li>
                <li>If the car doesnt move, verify all connections, ensure the battery is sufficiently charged, and
                    check that the HC-05 RX pin receives a 3.3V signal (use a voltage divider if needed).</li>
                <li>Ensure the Bluetooth module is disconnected during code upload to prevent errors.</li>
            </ol>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Conclusion</h2>
            <p class="text-gray-700">You've built a Bluetooth-controlled car using an Arduino Uno and HC-05 module!
                Enhance it by adding speed control with PWM, incorporating sensors for obstacle avoidance, or designing
                a custom chassis for better aesthetics. Experiment with different apps or add LED indicators for a more
                dynamic experience.</p>
        </section>
    </div>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>