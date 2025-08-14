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
    .developer-container {
        position: relative;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .developer-container:hover {
        transform: translateY(-10px);
    }

    .developer-img {
        transition: filter 0.3s ease;
    }

    .developer-container:hover .developer-img {
        filter: blur(4px);
    }

    .click-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 1rem;
        font-weight: 500;
        background: rgba(0, 0, 0, 0.5);
        padding: 8px 16px;
        border-radius: 6px;
        opacity: 0;
        transition: opacity 0.3s ease;
        cursor: default;
    }

    .developer-container:hover .click-text {
        opacity: 1;
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
        height: 300px;
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
        cursor: pointer;
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

    @media (max-width: 640px) {
        main {
            padding-top: 4rem;
        }

        .flex {
            flex-direction: column;
        }

        .timeline-container {
            flex-direction: row;
            margin-left: 0;
            height: 40px;
            width: 100%;
            justify-content: center;
            align-items: center;
            margin-bottom: 2rem;
        }

        .timeline-track,
        .timeline-slider {
            display: none;
        }

        .timeline-markers {
            flex-direction: row;
            position: static;
            width: 100%;
            justify-content: center;
            gap: 1rem;
            height: auto;
        }

        .timeline-marker {
            font-size: 0.875rem;
            text-align: center;
            padding: 6px 12px;
            background: white;
            border-radius: 9999px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #4B5563;
            font-weight: 500;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .timeline-marker:hover {
            background-color: #f3f4f6;
        }

        .timeline-marker.active {
            background: linear-gradient(90deg, #4B5563, #6B7280);
            color: white;
            -webkit-background-clip: initial;
            background-clip: initial;
            -webkit-text-fill-color: initial;
        }

        .developer-img {
            width: 120px;
            height: 120px;
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
        <br>
        <br>
        <!-- Hero Section -->
        <section class="mb-16">
            <h1 class="text-4xl md:text-5xl font-bold section-title mb-4">UIU Robotics Club Executives</h1>
        </section>

        <div class="flex">
            <!-- Timeline Section -->
            <aside class="w-full sm:w-1/4 pr-8">
                <h2 class="text-2xl font-semibold section-title mb-8">Executive Bodies</h2>
                <div class="timeline-container">
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
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                            <!-- Supervisor -->
                            <div class="developer-container mt-5">
                                <img src="https://cse.uiu.ac.bd/wp-content/uploads/sites/3/2024/04/F-H-min-1-240x300.jpg"
                                    alt="Fahim Hafiz" class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Fahim Hafiz</h3>
                                <p class="text-gray-600">Faculty Moderator</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                    <a href="https://github.com/fahimhafiz" class="text-gray-600 hover:text-blue-800"><i
                                            class="fab fa-github fa-lg"></i></a>
                                    <a href="https://www.linkedin.com/in/fahim-hafiz-47b3a5154"
                                        class="text-gray-600 hover:text-blue-800"><i
                                            class="fab fa-linkedin fa-lg"></i></a>
                                    <a href="https://fahimhafiz.com" class="text-gray-600 hover:text-blue-800"><i
                                            class="fas fa-globe fa-lg"></i></a>
                                </div>
                            </div>

                            <!-- President -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/tanim.jpg" alt="Junayed Tanim"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Junayed Tanim</h3>
                                <p class="text-gray-600">President</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Vice President -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/Bodi.jpg" alt="Md Bodiuzzaman Shikder"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md Bodiuzzaman Shikder</h3>
                                <p class="text-gray-600">Vice President</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- General Secretary -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/borsha.jpg" alt="Faria Rakib Borsha"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Faria Rakib Borsha</h3>
                                <p class="text-gray-600">General Secretary</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Asst. General Secretary -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/Fahad.jpg" alt="Fahad Rahman"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Fahad Rahman</h3>
                                <p class="text-gray-600">Asst. General Secretary</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Treasurer -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/Hamjah.jpg" alt="Md. Rashique Hamjah Chowdhury"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md. Rashique Hamjah Chowdhury</h3>
                                <p class="text-gray-600">Treasurer</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2022-2023 Committee -->
                    <div class="timeline-content hidden" data-year="2022">
                        <h3 class="text-3xl font-semibold section-title mb-8 text-center">2022-2023 Committee</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                            <!-- Vice President -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/abirsir.jpg" alt="Md. Abir Hassan"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md. Abir Hassan</h3>
                                <p class="text-gray-600">Faculty Moderator</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- President -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/Miftah.jpg" alt="Miftahul Islam Mazumdar"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Miftahul Islam Mazumdar</h3>
                                <p class="text-gray-600">President</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Vice President -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/abid.jpg" alt="Md. Abid Hossain"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md. Abid Hossain</h3>
                                <p class="text-gray-600">Vice President</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                    <a href="https://github.com/Abidh56" class="text-gray-600 hover:text-blue-800"><i
                                            class="fab fa-github fa-lg"></i></a>
                                    <a href="https://www.linkedin.com/in/abidhossain"
                                        class="text-gray-600 hover:text-blue-800"><i
                                            class="fab fa-linkedin fa-lg"></i></a>
                                    <a href="https://abidhossain.com" class="text-gray-600 hover:text-blue-800"><i
                                            class="fas fa-globe fa-lg"></i></a>
                                </div>
                            </div>

                            <!-- General Secretary -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/hasib.jpg" alt="Md. Shad Hasib Talukder"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md. Shad Hasib Talukder</h3>
                                <p class="text-gray-600">General Secretary</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Asst. General Secretary -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/maria.jpg" alt="Maria Talukder"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Maria Talukder</h3>
                                <p class="text-gray-600">Asst. General Secretary</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Treasurer -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/niloya.jpg" alt="Niloya Roy"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Niloya Roy</h3>
                                <p class="text-gray-600">Treasurer</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/Hamjah.jpg" alt="Md. Rashique Hamjah Chowdhury"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Md. Rashique Hamjah Chowdhury</h3>
                                <p class="text-gray-600">Asst. Treasurer</p>
                                <div class="mt-3 justify-center flex space-x-4">
                                </div>
                            </div>

                            <!-- Webmaster -->
                            <div class="developer-container mt-5">
                                <img src="/assets/img/Executive/abdullah.jpg" alt="Abdullah Al Masud"
                                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover">
                                <span class="click-text">View Details</span>
                                <h3 class="text-xl font-semibold text-gray-800 mt-4">Abdullah Al Masud</h3>
                                <p class="text-gray-600">Webmaster</p>
                                <div class="mt-3 justify-center flex space-x-4">
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
    // GSAP animations for developer containers
    gsap.from(".developer-container", {
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

    // Timeline logic
    const years = [2024, 2022];
    const slider = document.querySelector('.timeline-slider');
    const track = document.querySelector('.timeline-track');
    const markers = document.querySelectorAll('.timeline-marker');
    const contents = document.querySelectorAll('.timeline-content');

    function initializeDraggable() {
        if (window.innerWidth > 640) {
            const trackHeight = track.offsetHeight;
            const snapPoints = years.map((_, index) => (index / (years.length - 1)) * (trackHeight - 24));

            // Destroy existing Draggable instance to avoid conflicts
            if (slider._gsap && slider._gsap.draggable) {
                slider._gsap.draggable.kill();
            }

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
        }
    }

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

    // Clickable markers/buttons
    markers.forEach(marker => {
        marker.addEventListener('click', () => {
            const year = parseInt(marker.getAttribute('data-year'));
            const index = years.indexOf(year);
            if (window.innerWidth > 640) {
                const trackHeight = track.offsetHeight;
                const snapPoints = years.map((_, i) => (i / (years.length - 1)) * (trackHeight - 24));
                gsap.to(slider, {
                    y: snapPoints[index],
                    duration: 0.5,
                    ease: "power3.out"
                });
            }
            updateTimeline(year);
        });
    });

    // Initialize Draggable on load (desktop only)
    initializeDraggable();

    // Reinitialize Draggable on window resize
    window.addEventListener('resize', initializeDraggable);

    // Initialize with 2024
    updateTimeline(2024);
    </script>
</body>

</html>