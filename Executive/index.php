<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    /* Custom styles for enhanced visuals */
    .executive-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .executive-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .section-title {
        background: linear-gradient(90deg, #1E40AF, #3B82F6);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .timeline-container {
        position: relative;
        height: 80px;
        margin: 2rem 0;
    }

    .timeline-track {
        position: relative;
        height: 4px;
        background: #e5e7eb;
        border-radius: 2px;
    }

    .timeline-slider {
        position: absolute;
        width: 24px;
        height: 24px;
        background: #3B82F6;
        border-radius: 50%;
        top: -10px;
        cursor: grab;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .timeline-slider:active {
        cursor: grabbing;
    }

    .timeline-markers {
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: -30px;
        width: 100%;
    }

    .timeline-marker {
        font-size: 1rem;
        font-weight: 600;
        color: #4b5563;
        text-align: center;
        width: 80px;
    }

    .timeline-marker.active {
        color: #1E40AF;
    }

    .timeline-content {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .timeline-content.active {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <main class="container mx-auto px-4 py-12">
        <!-- Hero Section -->
        <section class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold section-title mb-4">UIU Robotics Club Executives</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Meet the passionate leaders driving innovation and excellence at the UIU Robotics Club.
            </p>
        </section>

        <!-- Current Committee Section -->
        <section class="mb-16">
            <h2 class="text-3xl font-semibold section-title mb-8 text-center">Current Committee</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Supervisor -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Supervisor" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Emily Carter</h3>
                        <p class="text-blue-600 font-medium">Faculty Supervisor</p>
                        <p class="text-gray-600 mt-2">Guiding the club with expertise and mentorship.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- President -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="President" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                        <p class="text-blue-600 font-medium">President</p>
                        <p class="text-gray-600 mt-2">Leading the club with a vision for cutting-edge robotics
                            innovation.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Vice President -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Vice President" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                        <p class="text-blue-600 font-medium">Vice President</p>
                        <p class="text-gray-600 mt-2">Coordinating projects and fostering team collaboration.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Technical Lead -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Technical Lead" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Alex Johnson</h3>
                        <p class="text-blue-600 font-medium">Technical Lead</p>
                        <p class="text-gray-600 mt-2">Overseeing technical development and innovation.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700 workload
                            <i class=" fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Treasurer -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Treasurer" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Sarah Lee</h3>
                        <p class="text-blue-600 font-medium">Treasurer</p>
                        <p class="text-gray-600 mt-2">Managing finances and ensuring sustainable operations.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Event Coordinator -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Event Coordinator" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Michael Brown</h3>
                        <p class="text-blue-600 font-medium">Event Coordinator</p>
                        <p class="text-gray-600 mt-2">Organizing workshops, competitions, and events.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Public Relations -->
                <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Public Relations" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Emma Davis</h3>
                        <p class="text-blue-600 font-medium">Public Relations</p>
                        <p class="text-gray-600 mt-2">Promoting the club and engaging with the community.</p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="mb-16">
            <h2 class="text-3xl font-semibold section-title mb-8 text-center">Previous Executive Bodies</h2>
            <div class="timeline-container">
                <div class="timeline-markers">
                    <div class="timeline-marker" data-year="2024">2024-2025</div>
                    <div class="timeline-marker" data-year="2023">2023-2024</div>
                    <div class="timeline-marker" data-year="2022">2022-2023</div>
                </div>
                <div class="timeline-track">
                    <div class="timeline-slider"></div>
                </div>
            </div>
            <div id="timeline-content">
                <!-- 2024-2025 Committee -->
                <div class="timeline-content" data-year="2024">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">2024-2025 Committee</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Supervisor" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Robert Wilson</h3>
                                <p class="text-blue-600 font-medium">Faculty Supervisor</p>
                                <p class="text-gray-600 mt-2">Provided strategic guidance in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Lisa Thompson</h3>
                                <p class="text-blue-600 font-medium">President</p>
                                <p class="text-gray-600 mt-2">Led the club to new heights in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Vice President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">David Kim</h3>
                                <p class="text-blue-600 font-medium">Vice President</p>
                                <p class="text-gray-600 mt-2">Supported innovative projects in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Technical Lead" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Sophie Chen</h3>
                                <p class="text-blue-600 font-medium">Technical Lead</p>
                                <p class="text-gray-600 mt-2">Pioneered technical advancements in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Treasurer" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Mark Lee</h3>
                                <p class="text-blue-600 font-medium">Treasurer</p>
                                <p class="text-gray-600 mt-2">Managed finances effectively in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Event Coordinator" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Anna Rodriguez</h3>
                                <p class="text-blue-600 font-medium">Event Coordinator</p>
                                <p class="text-gray-600 mt-2">Organized successful events in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Public Relations" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">James Patel</h3>
                                <p class="text-blue-600 font-medium">Public Relations</p>
                                <p class="text-gray-600 mt-2">Boosted club visibility in 2024.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2023-2024 Committee -->
                <div class="timeline-content hidden" data-year="2023">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">2023-2024 Committee</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Supervisor" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Laura Adams</h3>
                                <p class="text-blue-600 font-medium">Faculty Supervisor</p>
                                <p class="text-gray-600 mt-2">Mentored the team in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Anna Rodriguez</h3>
                                <p class="text-blue-600 font-medium">President</p>
                                <p class="text-gray-600 mt-2">Expanded club outreach in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Vice President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Mark Lee</h3>
                                <p class="text-blue-600 font-medium">Vice President</p>
                                <p class="text-gray-600 mt-2">Enhanced team collaboration in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Technical Lead" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Sophie Chen</h3>
                                <p class="text-blue-600 font-medium">Technical Lead</p>
                                <p class="text-gray-600 mt-2">Introduced new tech workshops in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Treasurer" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Ethan Harris</h3>
                                <p class="text-blue-600 font-medium">Treasurer</p>
                                <p class="text-gray-600 mt-2">Ensured financial stability in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Event Coordinator" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Olivia White</h3>
                                <p class="text-blue-600 font-medium">Event Coordinator</p>
                                <p class="text-gray-600 mt-2">Hosted major events in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Public Relations" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">James Patel</h3>
                                <p class="text-blue-600 font-medium">Public Relations</p>
                                <p class="text-gray-600 mt-2">Strengthened community ties in 2023.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2022-2023 Committee -->
                <div class="timeline-content hidden" data-year="2022">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">2022-2023 Committee</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Supervisor" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Dr. Michael Brown</h3>
                                <p class="text-blue-600 font-medium">Faculty Supervisor</p>
                                <p class="text-gray-600 mt-2">Guided the club in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">James Patel</h3>
                                <p class="text-blue-600 font-medium">President</p>
                                <p class="text-gray-600 mt-2">Launched major robotics competitions in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Vice President" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Olivia White</h3>
                                <p class="text-blue-600 font-medium">Vice President</p>
                                <p class="text-gray-600 mt-2">Strengthened community ties in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Technical Lead" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Ethan Harris</h3>
                                <p class="text-blue-600 font-medium">Technical Lead</p>
                                <p class="text-gray-600 mt-2">Developed core robotics projects in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Treasurer" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Sophie Chen</h3>
                                <p class="text-blue-600 font-medium">Treasurer</p>
                                <p class="text-gray-600 mt-2">Managed budgets effectively in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Event Coordinator" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Anna Rodriguez</h3>
                                <p class="text-blue-600 font-medium">Event Coordinator</p>
                                <p class="text-gray-600 mt-2">Organized key events in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                                alt="Previous Public Relations" class="w-full h-64 object-cover">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-800">Mark Lee</h3>
                                <p class="text-blue-600 font-medium">Public Relations</p>
                                <p class="text-gray-600 mt-2">Promoted the club in 2022.</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700"><i
                                            class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include ABSPATH . '_includes/footer.php'; ?>

    <script>
    // GSAP animations for cards
    gsap.from(".animate-card", {
        opacity: 0,
        y: 50,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out"
    });

    // Animate section titles
    gsap.from(".section-title", {
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 0.5,
        ease: "power3.out",
        stagger: 0.3
    });

    // Timeline slider logic
    const years = [2024, 2023, 2022];
    const slider = document.querySelector('.timeline-slider');
    const track = document.querySelector('.timeline-track');
    const markers = document.querySelectorAll('.timeline-marker');
    const contents = document.querySelectorAll('.timeline-content');
    const trackWidth = track.offsetWidth;
    const snapPoints = years.map((_, index) => (index / (years.length - 1)) * (trackWidth - 24)); // 24 is slider width

    // Initialize Draggable
    Draggable.create(slider, {
        type: "x",
        bounds: {
            minX: 0,
            maxX: trackWidth - 24
        },
        edgeResistance: 0.85,
        snap: snapPoints,
        onDragEnd: function() {
            const x = this.x;
            const closestSnap = snapPoints.reduce((prev, curr) =>
                Math.abs(curr - x) < Math.abs(prev - x) ? curr : prev
            );
            const index = snapPoints.indexOf(closestSnap);
            updateTimeline(years[index]);
        }
    });

    // Update timeline content
    function updateTimeline(year) {
        contents.forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('active');
        });
        markers.forEach(marker => marker.classList.remove('active'));

        const selectedContent = document.querySelector(`.timeline-content[data-year="${year}"]`);
        const selectedMarker = document.querySelector(`.timeline-marker[data-year="${year}"]`);
        selectedContent.classList.remove('hidden');
        selectedMarker.classList.add('active');

        gsap.fromTo(selectedContent, {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            ease: "power3.out",
            onComplete: () => {
                selectedContent.classList.add('active');
            }
        });
    }

    // Clickable markers
    markers.forEach(marker => {
        marker.addEventListener('click', () => {
            const year = parseInt(marker.getAttribute('data-year'));
            const index = years.indexOf(year);
            gsap.to(slider, {
                x: snapPoints[index],
                duration: 0.5,
                ease: "power3.out"
            });
            updateTimeline(year);
        });
    });

    // Initialize with 2024-2025
    updateTimeline(2024);
    </script>
</body>

</html>