<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
    .timeline-dot {
        width: 12px;
        height: 12px;
        background-color: #273F4F;
        border-radius: 50%;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .timeline-dot.active {
        transform: scale(1.6);
        background-color: #273F4F;
    }

    .timeline-item {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .timeline-item:hover {
        color: #273F4F;
        transform: translateX(5px);
        cursor: pointer;
    }

    .card-shadow {
        box-shadow: 0 6px 15px rgba(223, 242, 255, 0.84);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px 273F4F;
    }

    .timeline-container {
        overflow-x: auto;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .timeline-container::-webkit-scrollbar {
        height: 4px;
    }

    .timeline-container::-webkit-scrollbar-track {
        background: #f3f4f6;
        border-radius: 10px;
    }

    .timeline-container::-webkit-scrollbar-thumb {
        background-color: #fb6b6b;
        border-radius: 10px;
        background-clip: padding-box;
        border: 1px solid #f3f4f6;
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: scale(0.95);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    </style>
</head>

<body>
    <?php include ABSPATH . '_includes/header.php'; ?>
    <div class="container mx-auto px-4 py-8 sm:mt-5 mt-[160px] sm:pt-5 pt-[10px]">

        <!-- Introduction Section -->
        <section class="bg-white rounded-lg p-6 mb-8">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <!-- Left column: 5:3 aspect ratio box -->
                <div class="w-full lg:w-1/2">
                    <div class="relative w-full" style="padding-top: 60%;">
                        <!-- 5:3 aspect ratio = 3/5 = 0.6 = 60% padding-top -->
                        <img src="/assets/img/Group/1.jpg" alt="Descriptive alt text"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg" />
                    </div>
                </div>
                <!-- Right column: paragraph -->
                <div class="w-full lg:w-1/2 text-gray-600 leading-relaxed">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-8 tracking-tight">Who are we</h2>
                    <p>
                        The UIU Robotics Club, established in 2017 at United International University (UIU) in Dhaka,
                        Bangladesh, is a vibrant, student-run organization dedicated to fostering innovation in
                        robotics,
                        embedded systems, and information technology. Comprising highly motivated undergraduate and
                        graduate
                        students, the club serves as a progressive platform for robotics enthusiasts to explore
                        cutting-edge
                        engineering technologies, develop critical skills, and promote the field of robotics through
                        active
                        participation in research, training, and competitions. Our mission is to create connections
                        among
                        students, faculty, and corporate individuals while representing UIU on national and global
                        stages.
                    </p>
                </div>
            </div>
        </section>




        <!-- History Section -->
        <section class="w-full  mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8 tracking-tight">Our Achievements</h2>
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Timeline Section -->
                <div class="w-full lg:w-1/3 bg-white rounded-2xl p-6 card-shadow ">
                    <div class="relative">
                        <!-- Image Section -->
                        <div id="timeline-image" class="mb-6">
                            <img src="https://via.placeholder.com/300x150" alt="Achievement"
                                class="w-full h-40 object-cover rounded-xl fade-in" id="current-image" />
                        </div>
                        <div class="flex items-center justify-between mb-6">
                            <button id="prevYear" class="text-gray-600 hover:text-gray-800 transition-colors">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <span id="currentYear" class="text-xl font-semibold text-gray-900">2023 15 Jun</span>
                            <button id="nextYear" class="text-gray-600 hover:text-gray-800 transition-colors">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                        <div class="timeline-container" id="timeline">
                            <div class="flex items-center space-x-6 pt-2 pb-2 pl-4" id="timeline-items-container">
                                <!-- Timeline dots inserted here by JS -->
                            </div>
                        </div>
                        <div id="timeline-content" class="mt-6">
                            <!-- Content items inserted here by JS -->
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Stat Card Template -->
                    <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                        <div class="flex items-center space-x-3 mb-4">
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900">Events Organized by UIURC</h3>
                        </div>
                        <div class="text-4xl font-extrabold text-gray-600 mb-2">90</div>
                        <p class="text-gray-600 text-sm">Intra Events 87<br>National Events 3</p>
                    </div>

                    <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                        <div class="flex items-center space-x-3 mb-4">
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900">Total Members</h3>
                        </div>
                        <div class="text-4xl font-extrabold text-gray-600 mb-2">550+</div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                        <div class="flex items-center space-x-3 mb-4">
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900">Total Alumni</h3>
                        </div>
                        <div class="text-4xl font-extrabold text-gray-600 mb-2">1000+</div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                        <div class="flex items-center space-x-3 mb-4">
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900">Years of Journey</h3>
                        </div>
                        <div class="text-4xl font-extrabold text-gray-600 mb-2" id="years-display">9</div>
                    </div>
                    <script>
                    function updateYears() {
                        const startDate = new Date('2017-08-17');
                        const currentDate = new Date();

                        // Calculate years since August 17, 2017
                        let years = currentDate.getFullYear() - startDate.getFullYear();

                        // If before August 17th in the current year, decrement by 1
                        if (currentDate.getMonth() < 7 || (currentDate.getMonth() === 7 && currentDate.getDate() <
                                17)) {
                            years--;
                        }

                        // Adjust to match the provided value of 9 in 2025
                        const baseYearOffset = 9 - (2025 - 2017); // Adjust base to make 2025 show 9
                        years += baseYearOffset;

                        // Update the display
                        document.getElementById('years-display').textContent = years;
                    }

                    // Run on page load
                    updateYears();

                    // Optional: Update daily to check for date change
                    setInterval(updateYears, 24 * 60 * 60 * 1000);
                    </script>
                    <div class="bg-white rounded-2xl p-6 card-shadow col-span-1 md:col-span-2 gradient-bg">
                        <div class="flex items-center space-x-3 mb-4">
                            <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-900">Total Panel Members</h3>
                        </div>
                        <div class="text-4xl font-extrabold text-gray-600 mb-2">15</div>
                    </div>

                    <div class="col-span-1 md:col-span-2 flex mt-4">
                        <a href="\Executive\index.php">
                            <button
                                class="bg-gray-600 text-white px-5 py-2 rounded-md hover:bg-gray-700 transition-all duration-300 flex items-center space-x-2 m-2">
                                <span>See Executives</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button></a>

                        <button
                            class="bg-gray-600 text-white px-5 py-2 rounded-md hover:bg-gray-700 transition-all duration-300 flex items-center space-x-2 m-2">
                            <span>Explore Developers</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <script>
        const timelineData = [{
                date: "2017-08-17",
                text: "2017 17 Aug",
                image: "/assets/img/Group/1.jpg",
                contentTitle: "UIU Robotics Club Established",
                contentText: "The UIU Robotics Club was officially founded, marking the beginning of our journey in robotics innovation and education."
            },
            {
                date: "2018-11-23",
                text: "2018 23 Nov",
                image: "/assets/img/Group/2.jpg",
                contentTitle: "National Robotics Championship Win",
                contentText: "Our team won the National Robotics Championship with a groundbreaking autonomous drone project."
            },
            {
                date: "2019-08-09",
                text: "2019 09 Aug",
                image: "/assets/img/Group/3.jpg",
                contentTitle: "Achieved IEEE Membership Milestone",
                contentText: "Over 500 members joined the club, increasing our community and technical reach."
            },
            {
                date: "2021-03-14",
                text: "2021 14 Mar",
                image: "/assets/img/Group/2.jpg",
                contentTitle: "International Robotics Prize",
                contentText: "Won first prize at the International Robotics Challenge for innovative AI-based robot navigation."
            }
        ];


        // Sort timelineData by date ascending to keep timeline order consistent
        timelineData.sort((a, b) => new Date(a.date) - new Date(b.date));

        const timelineItemsContainer = document.getElementById('timeline-items-container');
        const timelineContentContainer = document.getElementById('timeline-content');
        const currentYearElem = document.getElementById('currentYear');
        const currentImageElem = document.getElementById('current-image');
        const prevYearBtn = document.getElementById('prevYear');
        const nextYearBtn = document.getElementById('nextYear');

        let currentIndex = 0;

        // Create timeline dots and content dynamically
        timelineData.forEach((item, index) => {
            // Create timeline dot container
            const dotContainer = document.createElement('div');
            dotContainer.className = 'timeline-item cursor-pointer';
            dotContainer.setAttribute('data-year', item.date);

            const dot = document.createElement('div');
            dot.className = 'timeline-dot w-5 h-5 rounded-full bg-gray-400 transition-all duration-300';

            dotContainer.appendChild(dot);
            timelineItemsContainer.appendChild(dotContainer);

            // Create content item (hidden by default except first)
            const contentDiv = document.createElement('div');
            contentDiv.id = `content-${item.date}`;
            contentDiv.className = 'content-item' + (index === 0 ? '' : ' hidden');
            contentDiv.innerHTML = `
        <h3 class="text-lg font-semibold text-gray-900 mb-2">${item.contentTitle}</h3>
        <p class="text-gray-700 text-sm">${item.contentText}</p>
      `;
            timelineContentContainer.appendChild(contentDiv);

            // Click event to jump to this timeline item
            dotContainer.addEventListener('click', () => {
                updateTimeline(index);
            });
        });

        function updateTimeline(index) {
            currentIndex = index;
            const currentData = timelineData[currentIndex];

            // Update year text
            currentYearElem.textContent = currentData.text;

            // Update image
            currentImageElem.src = currentData.image;

            // Update active dot
            const dots = document.querySelectorAll('.timeline-dot');
            dots.forEach((dot, idx) => {
                if (idx === currentIndex) {
                    dot.classList.add('active');
                    dot.classList.remove('bg-gray-400');
                    dot.classList.add('bg-gray-600');
                } else {
                    dot.classList.remove('active');
                    dot.classList.add('bg-gray-400');
                    dot.classList.remove('bg-gray-600');
                }
            });

            // Show only current content
            const contentItems = document.querySelectorAll('.content-item');
            contentItems.forEach((content, idx) => {
                if (idx === currentIndex) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        }

        prevYearBtn.addEventListener('click', () => {
            if (currentIndex > 0) updateTimeline(currentIndex - 1);
        });

        nextYearBtn.addEventListener('click', () => {
            if (currentIndex < timelineData.length - 1) updateTimeline(currentIndex + 1);
        });

        // Initialize first timeline item active
        updateTimeline(0);
        </script>

        <!-- <style>
            .timeline-dot.active {
                box-shadow: 0 0 10px 2px rgba(220, 38, 38, 0.7);
                transform: scale(1.3);
                z-index: 10;
            }

            .hidden {
                display: none;
            }

            /* Optional fade-in for image */
            .fade-in {
                animation: fadeIn 0.6s ease-in-out forwards;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }
            </style> -->
        <!-- </section> -->
        <!-- Mission and Vision Section -->
        <section class="bg-white rounded-lg p-6 mb-8">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8 tracking-tight">Our Motive</h2>
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-full text-gray-600 leading-relaxed">
                    <p>
                        The UIU Robotics Club, established in 2016 at United International University (UIU) in Dhaka,
                        Bangladesh, is a vibrant, student-run organization dedicated to fostering innovation in
                        robotics,
                        embedded systems, and information technology. Comprising highly motivated undergraduate and
                        graduate
                        students, the club serves as a progressive platform for robotics enthusiasts to explore
                        cutting-edge
                        engineering technologies, develop critical skills, and promote the field of robotics through
                        active
                        participation in research, training, and competitions. Our mission is to create connections
                        among
                        students, faculty, and corporate individuals while representing UIU on national and global
                        stages.
                    </p>
                </div>
            </div>
        </section>

    </div>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>