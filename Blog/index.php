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
    <main class="container mx-auto px-6 py-16 max-w-6xl">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900 pt-5">Featured Article</h1>
            <a href="AllBlogs.php"
                class="text-blue-500 font-medium hover:text-blue-600 transition-colors duration-200">See All
                Articles</a>
        </div>

        <div class="flex flex-col md:flex-row gap-6">
            <!-- Large Featured Post -->
            <a href="blog1.php" class="md:w-1/2 bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="img/Blog1_diagram.png" alt="Featured post image" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Smart Plant Monitoring System</h2>
                    <div class="flex items-center text-gray-600 text-sm mb-2">
                        <span>Aranya Kishor Das</span>
                        <span class="mx-2">•</span>
                        <span>July 19, 2025</span>
                        <span class="mx-2">•</span>
                        <span>3 Min Read</span>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">IoT</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">ESP
                            Projects</span>
                    </div>
                </div>
            </a>

            <!-- Smaller Posts -->
            <div class="md:w-1/2 grid grid-cols-1 gap-6">
                <!-- Post 2 -->
                <a href="blog2.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                    <div class="flex">
                        <img src="img/Blog2.jpg" alt="Blog post image" class="w-1/3 h-32 object-cover">
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                Colorful Arduino Tetris Game - WS2812B LED Matrix Tutorial
                            </h3>
                            <div class="flex items-center text-gray-600 text-sm mb-2">
                                <span>Dasteen</span>
                                <span class="mx-2">•</span>
                                <span>Jan 10, 2022</span>
                                <span class="mx-2">•</span>
                                <span>3 Min Read</span>
                            </div>
                            <div class="flex gap-2">
                                <span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Arduino</span>
                                <span
                                    class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">LED
                                    Matrix</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Post 3 -->
                <a href="blog3.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                    <div class="flex">
                        <img src="img/Blog3.jpg" alt="Blog post image" class="w-1/3 h-32 object-cover">
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                Motion Activated LED Strip using LDR and PIR
                            </h3>
                            <div class="flex items-center text-gray-600 text-sm mb-2">
                                <span>Dasteen</span>
                                <span class="mx-2">•</span>
                                <span>Feb 14, 2022</span>
                                <span class="mx-2">•</span>
                                <span>2 Min Read</span>
                            </div>
                            <div class="flex gap-2">
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Sensors</span>
                                <span
                                    class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Automation</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Post 4 -->
                <a href="blog4.php" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                    <div class="flex">
                        <img src="img/Blog4.jpg" alt="Blog post image" class="w-1/3 h-32 object-cover">
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                Bluetooth-Controlled Car with HC-05 Module
                            </h3>
                            <div class="flex items-center text-gray-600 text-sm mb-2">
                                <span>Dasteen</span>
                                <span class="mx-2">•</span>
                                <span>Mar 8, 2022</span>
                                <span class="mx-2">•</span>
                                <span>4 Min Read</span>
                            </div>
                            <div class="flex gap-2">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Bluetooth</span>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Robotics</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </main>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>