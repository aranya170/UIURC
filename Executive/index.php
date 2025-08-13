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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .executive-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            min-height: 350px;
        }

        .executive-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            background: linear-gradient(90deg, #4B5563, #6B7280);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .timeline-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            margin-left: 60px;
        }

        .timeline-track {
            position: relative;
            width: 4px;
            height: 100%;
            background: #e5e7eb;
            border-radius: 2px;
        }

        .timeline-slider {
            position: absolute;
            width: 24px;
            height: 24px;
            background: #6B7280;
            border-radius: 50%;
            left: -10px;
            cursor: grab;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .timeline-slider:active {
            cursor: grabbing;
        }

        .timeline-markers {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: absolute;
            left: -60px;
            height: 100%;
            width: 60px;
        }

        .timeline-marker {
            font-size: 1rem;
            font-weight: 600;
            color: #4B5563;
            text-align: left;
            height: auto;
            padding-right: 0;
            white-space: nowrap;
        }

        .timeline-marker.active {
            background: linear-gradient(90deg, #4B5563, #6B7280);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .timeline-content {
            opacity: 0;
            transform: translateX(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .timeline-content.active {
            opacity: 1;
            transform: translateX(0);
        }

        .profile-img {
            border-radius: 50%;
            width: 128px;
            height: 128px;
            object-fit: cover;
            margin: 0 auto;
        }

        .card-content {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 180px;
        }

        .go-back-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4B5563;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 1000;
        }

        .go-back-btn:hover {
            background-color: #6B7280;
        }

        @media (max-width: 640px) {
            .main {
                padding-top: 120rem;
            }

            .flex {
                flex-direction: column;
            }

            .timeline-container {
                margin-left: 40px;
                height: 200px;
            }

            .timeline-markers {
                left: -40px;
                width: 40px;
            }

            .timeline-marker {
                font-size: 0.875rem;
            }

            .timeline-track {
                width: 3px;
            }

            .timeline-slider {
                width: 20px;
                height: 20px;
                left: -8px;
            }

            .executive-card {
                min-height: 300px;
            }

            .profile-img {
                width: 96px;
                height: 96px;
                margin-top: 4px;
            }

            .card-content {
                padding: 4px;
                min-height: 140px;
            }

            .go-back-btn {
                top: 10px;
                right: 10px;
                padding: 6px 12px;
                font-size: 0.875rem;
            }

            h1.section-title {
                font-size: 2rem;
            }

            h2.section-title {
                font-size: 1.5rem;
            }

            h3.section-title {
                font-size: 1.25rem;
            }
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <main class="container mx-auto px-4 py-12">
        <!-- Hero Section -->
        <section class="mb-16">
            <h1 class="text-4xl md:text-5xl font-bold section-title mb-4 pt-5">UIU Robotics Club Executives</h1>
        </section>

        <div class="flex">
            <!-- Timeline Section -->
            <aside class="w-full sm:w-1/4 pr-8">
                <h2 class="text-2xl font-semibold section-title mb-8">Executive Bodies</h2>
                <div class="timeline-container" style="height: 300px;">
                    <div class="timeline-markers">
                        <div class="timeline-marker" data-year="2024">2024</div>
                        <div class="timeline-marker" data-year="2022">2022</div>
                    </div>
                    <div class="timeline-track">
                        <div class="timeline-slider"></div>
                    </div>
                </div>
            </aside>

            <!-- Committee Section -->
            <section class="w-full sm:w-3/4">
                <div id="timeline-content-container">
                    <!-- Current Committee Section -->
                    <div class="timeline-content" data-year="2024">
                        <h3 class="text-3xl font-semibold section-title mb-8 text-center">Current Committee</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                            <!-- Supervisor -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="https://cse.uiu.ac.bd/wp-content/uploads/sites/3/2024/04/F-H-min-1-240x300.jpg"
                                    alt="Fahim Hafiz" class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Fahim Hafiz</h3>
                                    <p class="text-gray-600 font-medium">Faculty Moderator</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/fahim-hafiz-47b3a5154"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/fahimhafiz"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- President -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/tanim.jpg" alt="Junayed Tanim" class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Junayed Tanim</h3>
                                    <p class="text-gray-600 font-medium">President</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/junayedtanim"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/junayedtanim"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Vice President -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/Bodi.jpg" alt="Md Bodiuzzaman Shikder"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Md Bodiuzzaman Shikder</h3>
                                    <p class="text-gray-600 font-medium">Vice President</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/md-bodiuzzaman-shikder-0a72861a1"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/bodiuzzaman"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- General Secretary -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/borsha.jpg" alt="Faria Rakib Borsha"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Faria Rakib Borsha</h3>
                                    <p class="text-gray-600 font-medium">General Secretary</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/faria-rakib-borsha-713034213"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/fariarakib"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Asst. General Secretary -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/Fahad.jpg" alt="Fahad Rahman" class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Fahad Rahman</h3>
                                    <p class="text-gray-600 font-medium">Asst. General Secretary</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/fahadrahman"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/fahadrahman"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Treasurer -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/Hamjah.jpg" alt="Md. Rashique Hamjah Chowdhury"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Md. Rashique Hamjah Chowdhury</h3>
                                    <p class="text-gray-600 font-medium">Treasurer</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/mrhchow"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/mrhchow" class="text-gray-500 hover:text-primary"><i
                                                class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2022-2023 Committee -->
                    <div class="timeline-content hidden" data-year="2022">
                        <h3 class="text-3xl font-semibold section-title mb-8 text-center">2022-2023 Committee</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                            <!-- Vice President -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/abirsir.jpg" alt="Md. Abir Hassan"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Md. Abir Hassan</h3>
                                    <p class="text-gray-600 font-medium">Vice President</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/abir-hassan"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/abir0" class="text-gray-500 hover:text-primary"><i
                                                class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- President -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/Miftah.jpg" alt="Miftahul Islam Mazumdar"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Miftahul Islam Mazumdar</h3>
                                    <p class="text-gray-600 font-medium">President</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/miftahul-islam"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/miftahulislam"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Vice President -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/abid.jpg" alt="Md. Abid Hossain"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Md. Abid Hossain</h3>
                                    <p class="text-gray-600 font-medium">Vice President</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/abidhossain"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/Abidh56" class="text-gray-500 hover:text-primary"><i
                                                class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- General Secretary -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/hasib.jpg" alt="Md. Shad Hasib Talukder"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Md. Shad Hasib Talukder</h3>
                                    <p class="text-gray-600 font-medium">General Secretary</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/shadhasib"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/shadhasib"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Asst. General Secretary -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/maria.jpg" alt="Maria Talukder"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Maria Talukder</h3>
                                    <p class="text-gray-600 font-medium">Asst. General Secretary</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/mariatalukder"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/mariatalukder"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Treasurer -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/niloya.jpg" alt="Niloya Roy" class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Niloya Roy</h3>
                                    <p class="text-gray-600 font-medium">Treasurer</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/niloyaroy"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/niloyaroy"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Webmaster -->
                            <div class="executive-card bg-white rounded-lg shadow-lg overflow-hidden animate-card">
                                <img src="/assets/img/Executive/abdullah.jpg" alt="Abdullah Al Masud"
                                    class="profile-img mt-6">
                                <div class="p-6 text-center card-content">
                                    <h3 class="text-xl font-semibold text-gray-800">Abdullah Al Masud</h3>
                                    <p class="text-gray-600 font-medium">Webmaster</p>
                                    <div class="mt-4 flex justify-center space-x-4">
                                        <a href="https://www.linkedin.com/in/staywithabdullah"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://github.com/staywithabdullah"
                                            class="text-gray-500 hover:text-primary"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
        const years = [2024, 2022];
        const slider = document.querySelector('.timeline-slider');
        const track = document.querySelector('.timeline-track');
        const markers = document.querySelectorAll('.timeline-marker');
        const contents = document.querySelectorAll('.timeline-content');
        const trackHeight = track.offsetHeight;
        const snapPoints = years.map((_, index) => (index / (years.length - 1)) * (trackHeight - 24));

        // Initialize Draggable
        Draggable.create(slider, {
            type: "y",
            bounds: {
                minY: 0,
                maxY: trackHeight - 24
            },
            edgeResistance: 0.85,
            snap: snapPoints,
            onDragEnd: function() {
                const y = this.y;
                const closestSnap = snapPoints.reduce((prev, curr) =>
                    Math.abs(curr - y) < Math.abs(prev - y) ? curr : prev
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
                x: 20
            }, {
                opacity: 1,
                x: 0,
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
                    y: snapPoints[index],
                    duration: 0.5,
                    ease: "power3.out"
                });
                updateTimeline(year);
            });
        });

        // Initialize with 2024
        updateTimeline(2024);
    </script>
</body>

</html>