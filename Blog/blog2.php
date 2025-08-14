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
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">LED
                        Projects</span>
                    <span
                        class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Games</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-blue-800 mb-6">
                Building a Colorful Arduino Tetris Game with WS2812B LED Matrix
            </h1>

            <p class="text-gray-700 mb-4">
                This tutorial guides you through creating a vibrant Tetris game using an
                Arduino Uno and a WS2812B 8x8 LED matrix. Inspired by Mirko Pavleski's project, this compact game uses a
                low-resolution 64-pixel display to render colorful tetrominoes, controlled by buttons and enhanced with
                sound effects via a buzzer.
                <a href="https://projecthub.arduino.cc/mircemk/colorful-arduino-tetris-game-ws2812b-led-matrix-tutorial-416706"
                    class="text-blue-600 hover:underline">Original project</a>.
            </p>

            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Components Needed</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Arduino Uno</li>
                <li>WS2812B 8x8 LED Matrix</li>
                <li>Three Push Buttons (for left, right, and rotate)</li>
                <li>Buzzer (optional, for sound effects)</li>
                <li>Jumper Wires</li>
                <li>Breadboard</li>
                <li>USB Cable for Arduino</li>
                <li>Computer with Arduino IDE</li>
            </ul>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 1: Setting Up the Hardware</h2>
            <div class="flex flex-col lg:flex-row items-start gap-6">
                <!-- Image -->
                <div class="flex-1 w-full lg:w-1/2">
                    <img class="rounded-lg w-full object-contain" src="img/Blog2_Diagram.jpg"
                        alt="Tetris Hardware Setup Diagram">
                </div>
                <!-- Text Content -->
                <div class="flex-1">
                    <ol class="list-decimal list-inside text-gray-700 space-y-4">
                        <li>
                            <strong>Connect the WS2812B LED Matrix</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>VCC to Arduino 5V</li>
                                <li>GND to Arduino GND</li>
                                <li>DIN (Data In) to Arduino Pin 6</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the Push Buttons</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>Left Button: One side to Arduino Pin 9, other side to GND (use internal pull-up)
                                </li>
                                <li>Right Button: One side to Arduino Pin 10, other side to GND (use internal pull-up)
                                </li>
                                <li>Rotate Button: One side to Arduino Pin 8, other side to GND (use internal pull-up)
                                </li>
                            </ul>
                        </li>
                        <li>
                            <strong>Connect the Buzzer (Optional)</strong>:
                            <ul class="list-disc list-inside ml-4">
                                <li>Positive to Arduino Pin 2</li>
                                <li>Negative to Arduino GND</li>
                            </ul>
                        </li>
                        <li>Secure all connections and position the LED matrix for clear visibility.</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 2: Arduino Code</h2>
            <p class="text-gray-700 mb-4">The Arduino code manages the Tetris game, controlling tetromino movements,
                collisions, and optional sound effects on the WS2812B LED matrix. Install the <code>FastLED</code>
                library in the Arduino IDE.</p>
            <pre class="bg-gray-900 text-white p-4 rounded-lg overflow-x-auto"><code>#include <FastLED.h>

// LED Matrix configuration
#define LED_PIN 6
#define NUM_LEDS 64
#define BRIGHTNESS 50
#define LED_TYPE WS2812B
#define COLOR_ORDER GRB
#define MATRIX_WIDTH 8
#define MATRIX_HEIGHT 8
#define BUZZER_PIN 2

// Button pins
#define LEFT_BUTTON_PIN 9
#define RIGHT_BUTTON_PIN 10
#define ROTATE_BUTTON_PIN 8

// Game parameters
#define INITIAL_GAME_SPEED 500 // Milliseconds
#define SPEED_INCREASE 10 // ms to decrease after each piece
#define MIN_GAME_SPEED 150 // Fastest game speed in milliseconds

// Sound frequencies
#define NOTE_B0 31
#define NOTE_C1 33
#define NOTE_CS1 35
#define NOTE_D1 37
#define NOTE_DS1 39
#define NOTE_E1 41
#define NOTE_F1 44
#define NOTE_FS1 46
#define NOTE_G1 49
#define NOTE_GS1 52
#define NOTE_A1 55
#define NOTE_AS1 58
#define NOTE_B1 62
#define NOTE_C2 65
#define NOTE_CS2 69
#define NOTE_D2 73
#define NOTE_DS2 78
#define NOTE_E2 82
#define NOTE_F2 87
#define NOTE_FS2 93
#define NOTE_G2 98
#define NOTE_GS2 104
#define NOTE_A2 110
#define NOTE_AS2 117
#define NOTE_B2 123
#define NOTE_C3 131
#define NOTE_CS3 139
#define NOTE_D3 147
#define NOTE_DS3 156
#define NOTE_E3 165
#define NOTE_F3 175
#define NOTE_FS3 185
#define NOTE_G3 196
#define NOTE_GS3 208
#define NOTE_A3 220
#define NOTE_AS3 233
#define NOTE_B3 247
#define NOTE_C4 262

// Colors
CRGB leds[NUM_LEDS];
#define BLACK CRGB(0, 0, 0)
#define RED CRGB(255, 0, 0)
#define GREEN CRGB(0, 255, 0)
#define BLUE CRGB(0, 0, 255)
#define YELLOW CRGB(255, 255, 0)
#define CYAN CRGB(0, 255, 255)
#define MAGENTA CRGB(255, 0, 255)
#define ORANGE CRGB(255, 165, 0)

// Tetromino shapes
const byte tetrominoes[7][4][2] = {
  {{0,0}, {0,1}, {1,0}, {1,1}}, // Square
  {{0,0}, {0,1}, {0,2}, {0,3}}, // I
  {{0,0}, {0,1}, {0,2}, {1,2}}, // L
  {{0,0}, {0,1}, {0,2}, {1,1}}, // T
  {{0,0}, {0,1}, {1,1}, {1,2}}, // S
  {{0,0}, {0,1}, {1,0}, {1,-1}}, // Z
  {{0,0}, {0,1}, {0,2}, {1,0}}  // J
};

int currentPiece[4][2];
int pieceX, pieceY;
int score = 0;
bool gameBoard[MATRIX_WIDTH][MATRIX_HEIGHT];
CRGB gameBoardColors[MATRIX_WIDTH][MATRIX_HEIGHT];
unsigned long lastMoveTime = 0;
int gameSpeed = INITIAL_GAME_SPEED;

void setup() {
  FastLED.addLeds<LED_TYPE, LED_PIN, COLOR_ORDER>(leds, NUM_LEDS).setCorrection(TypicalLEDStrip);
  FastLED.setBrightness(BRIGHTNESS);
  pinMode(LEFT_BUTTON_PIN, INPUT_PULLUP);
  pinMode(RIGHT_BUTTON_PIN, INPUT_PULLUP);
  pinMode(ROTATE_BUTTON_PIN, INPUT_PULLUP);
  pinMode(BUZZER_PIN, OUTPUT);
  randomSeed(analogRead(0));
  startNewPiece();
}

void loop() {
  if (millis() - lastMoveTime > gameSpeed) {
    movePieceDown();
    lastMoveTime = millis();
  }
  handleInput();
  updateDisplay();
  checkLines();
}

void startNewPiece() {
  int pieceType = random(7);
  for (int i = 0; i < 4; i++) {
    currentPiece[i][0] = tetrominoes[pieceType][i][0];
    currentPiece[i][1] = tetrominoes[pieceType][i][1];
  }
  pieceX = 3;
  pieceY = 0;
  if (!canPlacePiece()) {
    gameOver();
  }
}

bool canPlacePiece() {
  for (int i = 0; i < 4; i++) {
    int x = pieceX + currentPiece[i][0];
    int y = pieceY + currentPiece[i][1];
    if (x < 0 || x >= MATRIX_WIDTH || y >= MATRIX_HEIGHT || (y >= 0 && gameBoard[x][y])) {
      return false;
    }
  }
  return true;
}

void movePieceDown() {
  pieceY++;
  if (!canPlacePiece()) {
    pieceY--;
    placePiece();
    tone(BUZZER_PIN, NOTE_C4, 50);
    startNewPiece();
  }
}

void placePiece() {
  CRGB colors[] = {RED, GREEN, BLUE, YELLOW, CYAN, MAGENTA, ORANGE};
  CRGB color = colors[random(7)];
  for (int i = 0; i < 4; i++) {
    int x = pieceX + currentPiece[i][0];
    int y = pieceY + currentPiece[i][1];
    if (y >= 0) {
      gameBoard[x][y] = true;
      gameBoardColors[x][y] = color;
    }
  }
  score += 10;
  gameSpeed = max(MIN_GAME_SPEED, gameSpeed - SPEED_INCREASE);
}

void handleInput() {
  if (digitalRead(LEFT_BUTTON_PIN) == LOW) {
    pieceX--;
    if (!canPlacePiece()) pieceX++;
    delay(100);
  }
  if (digitalRead(RIGHT_BUTTON_PIN) == LOW) {
    pieceX++;
    if (!canPlacePiece()) pieceX--;
    delay(100);
  }
  if (digitalRead(ROTATE_BUTTON_PIN) == LOW) {
    rotatePiece();
    delay(100);
  }
}

void rotatePiece() {
  int temp[4][2];
  for (int i = 0; i < 4; i++) {
    temp[i][0] = -currentPiece[i][1];
    temp[i][1] = currentPiece[i][0];
  }
  for (int i = 0; i < 4; i++) {
    currentPiece[i][0] = temp[i][0];
    currentPiece[i][1] = temp[i][1];
  }
  if (!canPlacePiece()) {
    for (int i = 0; i < 4; i++) {
      currentPiece[i][0] = -temp[i][0];
      currentPiece[i][1] = temp[i][1];
    }
  } else {
    tone(BUZZER_PIN, NOTE_E3, 50);
  }
}

void checkLines() {
  for (int y = MATRIX_HEIGHT - 1; y >= 0; y--) {
    bool fullLine = true;
    for (int x = 0; x < MATRIX_WIDTH; x++) {
      if (!gameBoard[x][y]) {
        fullLine = false;
        break;
      }
    }
    if (fullLine) {
      score += 100;
      tone(BUZZER_PIN, NOTE_A3, 100);
      for (int yy = y; yy > 0; yy--) {
        for (int x = 0; x < MATRIX_WIDTH; x++) {
          gameBoard[x][yy] = gameBoard[x][yy - 1];
          gameBoardColors[x][yy] = gameBoardColors[x][yy - 1];
        }
      }
      for (int x = 0; x < MATRIX_WIDTH; x++) {
        gameBoard[x][0] = false;
        gameBoardColors[x][0] = BLACK;
      }
      y++;
    }
  }
}

void updateDisplay() {
  for (int i = 0; i < NUM_LEDS; i++) {
    leds[i] = BLACK;
  }
  for (int x = 0; x < MATRIX_WIDTH; x++) {
    for (int y = 0; y < MATRIX_HEIGHT; y++) {
      if (gameBoard[x][y]) {
        int index = x + y * MATRIX_WIDTH;
        leds[index] = gameBoardColors[x][y];
      }
    }
  }
  for (int i = 0; i < 4; i++) {
    int x = pieceX + currentPiece[i][0];
    int y = pieceY + currentPiece[i][1];
    if (y >= 0 && x >= 0 && x < MATRIX_WIDTH && y < MATRIX_HEIGHT) {
      int index = x + y * MATRIX_WIDTH;
      leds[index] = YELLOW;
    }
  }
  FastLED.show();
}

void gameOver() {
  tone(BUZZER_PIN, NOTE_C3, 500);
  for (int i = 0; i < NUM_LEDS; i++) {
    leds[i] = RED;
  }
  FastLED.show();
  delay(2000);
  memset(gameBoard, 0, sizeof(gameBoard));
  memset(gameBoardColors, 0, sizeof(gameBoardColors));
  score = 0;
  gameSpeed = INITIAL_GAME_SPEED;
  startNewPiece();
}</code></pre>
            <p class="text-gray-700 mt-4">Upload this code to your Arduino Uno using the Arduino IDE. Ensure the
                <code>FastLED</code> library is installed.
            </p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 3: Playing the Game</h2>
            <p class="text-gray-700 mb-4">Once the code is uploaded and the hardware is connected, you can start playing
                Tetris on the LED matrix:</p>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Left Button (Pin 9)</strong>: Move the tetromino left.</li>
                <li><strong>Right Button (Pin 10)</strong>: Move the tetromino right.</li>
                <li><strong>Rotate Button (Pin 8)</strong>: Rotate the tetromino clockwise.</li>
                <li>The tetromino falls automatically, speeding up as you place pieces.</li>
                <li>Complete a horizontal line to clear it and earn 100 points; each placed piece adds 10 points.</li>
                <li>Game over occurs if a new piece cannot be placed, indicated by a red flash on the matrix and a low
                    tone.</li>
            </ul>
            <p class="text-gray-700 mt-4">The score is tracked internally but not displayed on the matrix due to its low
                resolution. You can monitor it via the Serial Monitor if desired.</p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Step 4: Testing and Troubleshooting</h2>
            <ol class="list-decimal list-inside text-gray-700">
                <li>Upload the code and open the Serial Monitor (115200 baud) to verify the Arduino is running.</li>
                <li>Check that the LED matrix displays the falling tetrominoes in bright colors.</li>
                <li>Test each button to ensure responsive movement and rotation.</li>
                <li>If using the buzzer, confirm sound effects play for piece placement, rotation, and line clears.</li>
                <li>If the matrix doesnt light up, verify the <code>FastLED</code> library version and check
                    connections.</li>
            </ol>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Conclusion</h2>
            <p class="text-gray-700">Youve built a colorful Tetris game using an Arduino and WS2812B LED matrix!
                Enhance it by adding a display for the score, experimenting with different tetromino colors, or using a
                larger matrix for better resolution. Try adding more sound effects or a high-score system for extra fun.
            </p>
        </section>
    </div>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>