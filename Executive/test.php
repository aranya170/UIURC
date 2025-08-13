<head>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    /* Custom styles for minimalist cards and vertical timeline */
    .executive-card {
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        width: 180px;
        /* Fixed width for all cards */
        height: 220px;
        /* Fixed height for all cards */
        margin: 0 auto;
        display: flex;
        flex-direction: column;
    }

    .executive-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .executive-card img {
        width: 100%;
        height: 120px;
        /* Adjusted for 9:11 ratio */
        object-fit: cover;
        aspect-ratio: 9 / 11;
        /* Passport-sized ratio (width:height) */
    }

    .executive-card .no-image {
        width: 100%;
        height: 120px;
        /* Same height as image for consistency */
        background: #f3f4f6;
        /* Light gray placeholder */
    }

    .executive-card-content {
        padding: 10px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .executive-card h3 {
        font-size: 0.95rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 3px;
    }

    .executive-card p.position {
        font-size: 0.8rem;
        color: #3b82f6;
        font-weight: 500;
        margin-bottom: 6px;
    }

    .executive-card p.description {
        font-size: 0.7rem;
        color: #6b7280;
        line-height: 1.2;
        display: none;
        /* Hidden for minimalism */
    }

    .executive-card .social-links {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 6px;
    }

    .executive-card .social-links a {
        color: #3b82f6;
        font-size: 0.9rem;
        transition: color 0.2s ease;
    }

    .executive-card .social-links a:hover {
        color: #1e40af;
    }

    .section-title {
        background: linear-gradient(90deg, #1E40AF, #3B82F6);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 2rem;
        font-weight: 700;
    }

    .timeline-section {
        display: flex;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
    }

    .timeline-container {
        position: relative;
        width: 60px;
        /* Width for vertical timeline */
        height: 300px;
        /* Height for vertical timeline */
        margin: 1rem 1rem 1rem 0;
        /* Minimal right margin */
        flex-shrink: 0;
    }

    .timeline-track {
        position: relative;
        width: 3px;
        /* Thin vertical track */
        height: 100%;
        background: #e5e7eb;
        border-radius: 1.5px;
        margin: 0 auto;
    }

    .timeline-slider {
        position: absolute;
        width: 18px;
        height: 18px;
        background: #3B82F6;
        border-radius: 50%;
        left: -7.5px;
        /* Centered on track */
        cursor: grab;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
    }

    .timeline-slider:active {
        cursor: grabbing;
    }

    .timeline-markers {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: absolute;
        left: 20px;
        /* Adjusted for right-side placement */
        height: 100%;
        top: 0;
    }

    .timeline-marker {
        font-size: 0.85rem;
        font-weight: 500;
        color: #4b5563;
        text-align: left;
        width: 80px;
    }

    .timeline-marker.active {
        color: #1E40AF;
    }

    .timeline-content {
        opacity: 0;
        transform: translateY(15px);
        transition: opacity 0.4s ease, transform 0.4s ease;
        flex-grow: 1;
    }

    .timeline-content.active {
        opacity: 1;
        transform: translateY(0);
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 1rem;
        justify-items: center;
        max-width: 1000px;
        /* Adjusted for side-by-side layout */
    }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold section-title mb-2">UIU Robotics Club Executives</h1>
            <p class="text-base text-gray-500 max-w-md mx-auto">
                Leaders driving innovation at UIU Robotics Club.
            </p>
        </section>

        <!-- Current Committee Section -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold section-title mb-5 text-center">Current Committee</h2>
            <div class="grid">
                <!-- Supervisor -->
                <div class="executive-card animate-card">
                    <img src="https://cse.uiu.ac.bd/wp-content/uploads/sites/3/2024/04/F-H-min-1-240x300.jpg"
                        alt="Supervisor">
                    <div class="executive-card-content">
                        <h3>Dr. Emily Carter</h3>
                        <p class="position">Faculty Supervisor</p>
                        <p class="description">Guiding with expertise.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- President -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="President">
                    <div class="executive-card-content">
                        <h3>John Doe</h3>
                        <p class="position">President</p>
                        <p class="description">Leading innovation.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Vice President -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Vice President">
                    <div class="executive-card-content">
                        <h3>Jane Smith</h3>
                        <p class="position">Vice President</p>
                        <p class="description">Fostering collaboration.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Technical Lead -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Technical Lead">
                    <div class="executive-card-content">
                        <h3>Alex Johnson</h3>
                        <p class="position">Technical Lead</p>
                        <p class="description">Driving innovation.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Treasurer -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Treasurer">
                    <div class="executive-card-content">
                        <h3>Sarah Lee</h3>
                        <p class="position">Treasurer</p>
                        <p class="description">Managing finances.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Event Coordinator -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Event Coordinator">
                    <div class="executive-card-content">
                        <h3>Michael Brown</h3>
                        <p class="position">Event Coordinator</p>
                        <p class="description">Organizing events.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Public Relations -->
                <div class="executive-card animate-card">
                    <img src="https://loremipsum.imgix.net/gPyHKDGI0md4NkRDjs4k8/36be1e73008a0181c1980f727f29d002/avatar-placeholder-generator-500x500.jpg?w=300&h=400&q=60&auto=format,compress"
                        alt="Public Relations">
                    <div class="executive-card-content">
                        <h3>Emma Davis</h3>
                        <p class="position">Public Relations</p>
                        <p class="description">Engaging community.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold section-title mb-5 text-center">Previous Executive Bodies</h2>
            <div class="timeline-section">
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
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">2024-2025 Committee</h3>
                        <div class="grid">
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Dr. Robert Wilson</h3>
                                    <p class="position">Faculty Supervisor</p>
                                    <p class="description">Strategic guidance.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Lisa Thompson</h3>
                                    <p class="position">President</p>
                                    <p class="description">Led to new heights.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>David Kim</h3>
                                    <p class="position">Vice President</p>
                                    <p class="description">Supported innovation.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Sophie Chen</h3>
                                    <p class="position">Technical Lead</p>
                                    <p class="description">Technical advancements.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Mark Lee</h3>
                                    <p class="position">Treasurer</p>
                                    <p class="description">Managed finances.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Anna Rodriguez</h3>
                                    <p class="position">Event Coordinator</p>
                                    <p class="description">Organized events.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>James Patel</h3>
                                    <p class="position">Public Relations</p>
                                    <p class="description">Boosted visibility.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2023-2024 Committee -->
                    <div class="timeline-content hidden" data-year="2023">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">2023-2024 Committee</h3>
                        <div class="grid">
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Dr. Laura Adams</h3>
                                    <p class="position">Faculty Supervisor</p>
                                    <p class="description">Mentored the team.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Anna Rodriguez</h3>
                                    <p class="position">President</p>
                                    <p class="description">Expanded outreach.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Mark Lee</h3>
                                    <p class="position">Vice President</p>
                                    <p class="description">Enhanced collaboration.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Sophie Chen</h3>
                                    <p class="position">Technical Lead</p>
                                    <p class="description">Introduced workshops.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Ethan Harris</h3>
                                    <p class="position">Treasurer</p>
                                    <p class="description">Ensured stability.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Olivia White</h3>
                                    <p class="position">Event Coordinator</p>
                                    <p class="description">Hosted major events.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>James Patel</h3>
                                    <p class="position">Public Relations</p>
                                    <p class="description">Strengthened ties.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2022-2023 Committee -->
                    <div class="timeline-content hidden" data-year="2022">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">2022-2023 Committee</h3>
                        <div class="grid">
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Dr. Michael Brown</h3>
                                    <p class="position">Faculty Supervisor</p>
                                    <p class="description">Guided the club.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>James Patel</h3>
                                    <p class="position">President</p>
                                    <p class="description">Launched competitions.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Olivia White</h3>
                                    <p class="position">Vice President</p>
                                    <p class="description">Strengthened ties.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Ethan Harris</h3>
                                    <p class="position">Technical Lead</p>
                                    <p class="description">Developed projects.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Sophie Chen</h3>
                                    <p class="position">Treasurer</p>
                                    <p class="description">Managed budgets.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Anna Rodriguez</h3>
                                    <p class="position">Event Coordinator</p>
                                    <p class="description">Organized events.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="executive-card">
                                <div class="no-image"></div>
                                <div class="executive-card-content">
                                    <h3>Mark Lee</h3>
                                    <p class="position">Public Relations</p>
                                    <p class="description">Promoted the club.</p>
                                    <div class="social-links">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
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
        y: 30,
        duration: 0.8,
        stagger: 0.15,
        ease: "power2.out"
    });

    // Animate section titles
    gsap.from(".section-title", {
        opacity: 0,
        x: -30,
        duration: 0.8,
        delay: 0.3,
        ease: "power2.out",
        stagger: 0.2
    });

    // Timeline slider logic
    const years = [2024, 2023, 2022];
    const slider = document.querySelector('.timeline-slider');
    const track = document.querySelector('.timeline-track');
    const markers = document.querySelectorAll('.timeline-marker');
    const contents = document.querySelectorAll('.timeline-content');
    const trackHeight = track.offsetHeight;
    const snapPoints = years.map((_, index) => (index / (years.length - 1)) * (trackHeight -
        18)); // 18 is slider height

    // Initialize Draggable for vertical movement
    Draggable.create(slider, {
        type: "y",
        bounds: {
            minY: 0,
            maxY: trackHeight - 18
        },
        edgeResistance: 0.9,
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
            y: 15
        }, {
            opacity: 1,
            y: 0,
            duration: 0.4,
            ease: "power2.out",
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
                duration: 0.4,
                ease: "power2.out"
            });
            updateTimeline(year);
        });
    });

    // Initialize with 2024-2025
    updateTimeline(2024);
    </script>
</body>