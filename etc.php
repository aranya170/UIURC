<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Club Achievements</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .timeline-dot {
        width: 12px;
        height: 12px;
        background-color: #fb6b6b;
        border-radius: 50%;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .timeline-dot.active {
        transform: scale(1.6);
        background-color: #ff0303;
    }

    .timeline-item {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .timeline-item:hover {
        color: #ff0303;
        transform: translateX(5px);
        cursor: pointer;
    }

    .card-shadow {
        box-shadow: 0 6px 15px rgba(255, 3, 3, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 3, 3, 0.12);
    }

    .gradient-bg {
        background: linear-gradient(135deg, #ffeaea 0%, #ffd2d2 100%);
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

<body class="bg-gray-50 font-sans">
    <section class="w-full max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-red-900 mb-8 tracking-tight">Our Achievements</h2>
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Timeline Section -->
            <div class="w-full lg:w-1/3 bg-white rounded-2xl p-6 card-shadow gradient-bg">
                <div class="relative">
                    <!-- Image Section -->
                    <div id="timeline-image" class="mb-6">
                        <img src="https://via.placeholder.com/300x150" alt="Achievement"
                            class="w-full h-40 object-cover rounded-xl fade-in" id="current-image" />
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <button id="prevYear" class="text-red-600 hover:text-red-800 transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <span id="currentYear" class="text-xl font-semibold text-red-900">2023 15 Jun</span>
                        <button id="nextYear" class="text-red-600 hover:text-red-800 transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <div class="timeline-container" id="timeline">
                        <div class="flex items-center space-x-6 pb-2 pl-4">
                            <div class="flex items-center space-x-3 timeline-item" data-year="2023-06-15">
                                <div class="timeline-dot"></div>
                                <span class="text-gray-700 font-medium">2023 15 Jun</span>
                            </div>
                            <div class="flex items-center space-x-3 timeline-item" data-year="2023-04-03">
                                <div class="timeline-dot"></div>
                                <span class="text-gray-700 font-medium">2023 03 Apr</span>
                            </div>
                            <div class="flex items-center space-x-3 timeline-item" data-year="2023-05-15">
                                <div class="timeline-dot"></div>
                                <span class="text-gray-700 font-medium">2023 15 May</span>
                            </div>
                            <div class="flex items-center space-x-3 timeline-item" data-year="2019-08-09">
                                <div class="timeline-dot"></div>
                                <span class="text-gray-700 font-medium">2019 09 Aug</span>
                            </div>
                            <div class="flex items-center space-x-3 timeline-item" data-year="2018-11-23">
                                <div class="timeline-dot"></div>
                                <span class="text-gray-700 font-medium">2018 23 Nov</span>
                            </div>
                        </div>
                    </div>
                    <div id="timeline-content" class="mt-6">
                        <div id="content-2023-06-15" class="content-item">
                            <h3 class="text-lg font-semibold text-red-900">Official Android App Launch</h3>
                            <p class="text-gray-600 text-sm">We published an Android app to manage club activities and
                                keep members updated with the latest news.</p>
                        </div>
                        <div id="content-2023-04-03" class="content-item hidden">
                            <h3 class="text-lg font-semibold text-red-900">Tech Workshop 2023</h3>
                            <p class="text-gray-600 text-sm">Hosted a workshop to train members in advanced tech skills,
                                fostering innovation.</p>
                        </div>
                        <div id="content-2023-05-15" class="content-item hidden">
                            <h3 class="text-lg font-semibold text-red-900">National Coding Competition</h3>
                            <p class="text-gray-600 text-sm">Organized a national coding event with over 200
                                participants from across the country.</p>
                        </div>
                        <div id="content-2019-08-09" class="content-item hidden">
                            <h3 class="text-lg font-semibold text-red-900">First Hackathon Win</h3>
                            <p class="text-gray-600 text-sm">Our team secured first place in a regional hackathon,
                                showcasing our talent.</p>
                        </div>
                        <div id="content-2018-11-23" class="content-item hidden">
                            <h3 class="text-lg font-semibold text-red-900">Club Founding Day</h3>
                            <p class="text-gray-600 text-sm">NDITC was established, marking the beginning of our journey
                                in tech innovation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Stat Card Template -->
                <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Events Organized by NDITC</h3>
                    </div>
                    <div class="text-4xl font-extrabold text-red-600 mb-2">22</div>
                    <p class="text-gray-600 text-sm">Intra Events 15<br>National Events 7</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Total Members</h3>
                    </div>
                    <div class="text-4xl font-extrabold text-red-600 mb-2">700+</div>
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Total Alumni</h3>
                    </div>
                    <div class="text-4xl font-extrabold text-red-600 mb-2">2700+</div>
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow gradient-bg">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Years of Journey</h3>
                    </div>
                    <div class="text-4xl font-extrabold text-red-600 mb-2">6</div>
                </div>

                <div class="bg-white rounded-2xl p-6 card-shadow col-span-1 md:col-span-2 gradient-bg">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <h3 class="text-lg font-semibold text-red-900">Total Panelists</h3>
                    </div>
                    <div class="text-4xl font-extrabold text-red-600 mb-2">15</div>
                </div>

                <div class="col-span-1 md:col-span-2 flex justify-between mt-4">
                    <button
                        class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700 transition-all duration-300 flex items-center space-x-2">
                        <span>See Executives</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button
                        class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700 transition-all duration-300 flex items-center space-x-2">
                        <span>Explore Developers</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
    const timelineItems = document.querySelectorAll('.timeline-item');
    const prevYearBtn = document.getElementById('prevYear');
    const nextYearBtn = document.getElementById('nextYear');
    const currentYear = document.getElementById('currentYear');
    const contentItems = document.querySelectorAll('.content-item');
    const currentImage = document.getElementById('current-image');
    const timelineContainer = document.getElementById('timeline');
    let currentIndex = 0;

    const imageMap = {
        '2023-06-15': 'assets/img/Group/1.jpg',
        '2023-04-03': 'assets/img/Group/2.jpg',
        '2023-05-15': 'assets/img/Group/3.jpg',
        '2019-08-09': 'assets/img/Group/1.jpg',
        '2018-11-23': 'assets/img/Group/3.jpg'
    };

    function updateTimeline() {
        timelineItems.forEach((item, index) => {
            const dot = item.querySelector('.timeline-dot');
            const year = item.dataset.year;
            if (index === currentIndex) {
                dot.classList.add('active');
                currentYear.textContent = item.querySelector('span').textContent;
                contentItems.forEach(content => content.classList.add('hidden'));
                document.getElementById(`content-${year}`).classList.remove('hidden');
                currentImage.src = imageMap[year];
                currentImage.classList.remove('fade-in');
                void currentImage.offsetWidth;
                currentImage.classList.add('fade-in');

                const itemRect = item.getBoundingClientRect();
                const containerRect = timelineContainer.getBoundingClientRect();
                if (itemRect.left < containerRect.left || itemRect.right > containerRect.right) {
                    item.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center'
                    });
                }
            } else {
                dot.classList.remove('active');
            }
        });
    }

    prevYearBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateTimeline();
        }
    });

    nextYearBtn.addEventListener('click', () => {
        if (currentIndex < timelineItems.length - 1) {
            currentIndex++;
            updateTimeline();
        }
    });

    timelineItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            currentIndex = index;
            updateTimeline();
        });
    });

    updateTimeline();
    </script>
</body>

</html>