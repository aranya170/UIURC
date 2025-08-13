<?php
include_once '../_settings/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
    /* Custom animations */
    .fade-in {
        animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 640px) {
        main {
            padding-top: 4rem;
        }
    }

    /* Smooth hover effect */
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <!-- Main Content -->
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 max-w-6xl">
        <h1 class="text-3xl font-bold text-gray-900 mb-8 pt-5">All Blogs</h1>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog Post 1 -->
            <a href="blog1.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="img/Blog1_diagram.png" alt="Blog post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Smart Plant Monitoring System</h2>
                    <p class="text-gray-600 mb-4 line-clamp-2">Learn how to build a smart plant monitoring system using
                        an ESP8266 to track soil moisture, temperature, and humidity in real-time.</p>
                    <div class="flex items-center text-gray-600 text-sm mb-2">
                        <span>Aranya</span>
                        <span class="mx-2">•</span>
                        <span>July 19, 2025</span>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">IoT</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">ESP
                            Projects</span>
                    </div>
                </div>
            </a>

            <!-- Blog Post 2 -->
            <a href="blog2.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="img/Blog2.jpg" alt="Blog post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Colorful Arduino Tetris Game - WS2812B LED
                        Matrix Tutorial</h2>
                    <p class="text-gray-600 mb-4 line-clamp-2">Create a vibrant Tetris game using an Arduino Uno and
                        WS2812B LED matrix, controlled by buttons with sound effects.</p>
                    <div class="flex items-center text-gray-600 text-sm mb-2">
                        <span>Aranya</span>
                        <span class="mx-2">•</span>
                        <span>July 19, 2025</span>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Arduino</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">LED
                            Matrix</span>
                    </div>
                </div>
            </a>

            <!-- Blog Post 3 -->
            <a href="blog3.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="img/Blog3.jpg" alt="Blog post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Motion Activated LED Strip using LDR and PIR
                    </h2>
                    <p class="text-gray-600 mb-4 line-clamp-2">Build a motion-activated LED strip that lights up in
                        low-light conditions using an Arduino, PIR sensor, and LDR.</p>
                    <div class="flex items-center text-gray-600 text-sm mb-2">
                        <span>Aranya</span>
                        <span class="mx-2">•</span>
                        <span>July 19, 2025</span>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Sensors</span>
                        <span
                            class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Automation</span>
                    </div>
                </div>
            </a>

            <!-- Blog Post 4 -->
            <a href="blog4.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="img/Blog4.jpg" alt="Blog post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Bluetooth-Controlled Car with HC-05 Module</h2>
                    <p class="text-gray-600 mb-4 line-clamp-2">Construct a Bluetooth-controlled car using an Arduino Uno
                        and HC-05 module, driven by a smartphone app.</p>
                    <div class="flex items-center text-gray-600 text-sm mb-2">
                        <span>Aranya</span>
                        <span class="mx-2">•</span>
                        <span>July 19, 2025</span>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Bluetooth</span>
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Robotics</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            <nav class="inline-flex space-x-2">
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">Previous</a>
                <a href="#"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200">1</a>
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">Next</a>
            </nav>
        </div>
    </main>


    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>