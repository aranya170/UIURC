<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <svg style="display: none;">
        <symbol id="icon-phone" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M6.62 10.79a15.91 15.91 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.67 11.67 0 003.67 1.17 1 1 0 011 1.14v3.5a1 1 0 01-1 1A19 19 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1.14 11.67 11.67 0 00-1.17 3.67 1 1 0 01-.21 1.11l-2.2 2.2z" />
        </symbol>
        <symbol id="icon-mail" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm8 7.41l8-5.33V6H4v.08l8 5.33zm-8 6.59h16V8.42l-8 5.33-8-5.33V18z" />
        </symbol>
    </svg>
    <style>
    .developer-container {
        position: relative;
        text-align: center;
    }

    .developer-img {
        transition: filter 0.3s ease;
    }

    .developer-img:hover {
        filter: blur(4px);
        cursor: pointer;
    }

    .developer-container:hover .click-text {
        opacity: 1;
    }

    .click-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 1.25rem;
        font-weight: 600;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        align-items: center;
        justify-content: center;
        z-index: 1000;
        overflow-y: auto;
    }

    .modal-content {
        background-color: white;
        padding: 48px;
        border-radius: 16px;
        max-width: 1200px;
        min-height: 600px;
        width: 90%;
        display: flex;
        position: relative;
    }

    .modal-image {
        flex: 0 0 auto;
        margin-right: 48px;
    }

    .modal-details {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .contact-info {
        margin-top: 1rem;
        text-align: left;
    }

    .contact-info svg {
        width: 16px;
        height: 16px;
        margin-right: 8px;
        vertical-align: middle;
    }

    .social-links {
        margin-top: auto;
        text-align: right;
    }

    @media (max-width: 640px) {
        main {
            padding-top: 120rem;
        }

        .modal-content {
            flex-direction: column;
            padding: 24px;
            max-width: 90vw;
            min-height: auto;
        }

        .modal-image {
            margin-right: 0;
            margin-bottom: 24px;
            text-align: center;
        }

        .modal-image img {
            width: 128px;
            height: 128px;
        }

        .modal-details h3 {
            font-size: 1.5rem;
        }

        .click-text {
            font-size: 1rem;
        }

        #modal-aranya .modal-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* center vertically */
            padding: 2rem 1.5rem;
        }


    }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <main class="container mx-auto px-4 py-12">
        <section class="mb-12 pt-9">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 pt-5">Our Developers</h1>
        </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Developer 1 -->
            <div class="developer-container mt-5">
                <img src="/assets/img/Executive/aranya.jpg" alt="Aranya Kishor Das"
                    class="developer-img rounded-full w-52 h-52 mx-auto object-cover"
                    onclick="openModal('modal-aranya')">
                <span class="click-text">Click for Details</span>
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Aranya Kishor Das</h3>
                <p class="text-gray-600">Project Manager and Full Stack Developer</p>
                <div class="mt-3 justify-center">
                    <a href="https://github.com/aranya170" class="text-gray-600 hover:text-primary"><i
                            class="fab fa-github fa-lg"></i></a>
                    <a href="https://www.linkedin.com/in/aranyakishor01/" class="text-gray-600 hover:text-primary"><i
                            class="fab fa-linkedin fa-lg"></i></a>
                    <a href="https://aranyaportfolio.web.app/" class="text-gray-600 hover:text-primary"><i
                            class="fas fa-globe fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <!-- Modal for Aranya -->
        <div id="modal-aranya" class="modal">
            <div class="modal-content">
                <div class="modal-image">
                    <img src="/assets/img/Executive/aranya.jpg" alt="Aranya Kishor Das"
                        class="rounded-full w-98 h-98 object-cover mt-8">
                </div>
                <div class="modal-details mt-10">
                    <h3 class="text-3xl font-semibold mb-2">
                        <span class="text-primary">Aranya</span> <span class="text-gray-800">Kishor Das</span>
                    </h3>
                    <p class="text-gray-600 mb-1">Project Manager and Full Stack Developer</p>
                    <p class="text-gray-600 mb-3">Computer Science and Engineering</p>
                    <p class="text-gray-700 mb-4">Skilled in full-stack web development, design, and Deep Learning.
                        Leading the club's digital presence with modern frameworks.</p>
                    <div class="contact-info">
                        <p class="text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                            +880 130 091 9276
                        </p>
                        <p class="text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-mail"></use>
                            </svg>
                            aranya.akd@gmail.com
                        </p>
                    </div>
                    <div class="social-links">
                        <div class="justify-end">
                            <a href="https://github.com/aranya170" class="text-primary hover:text-primary"><i
                                    class="fab fa-github fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/aranyakishor01/"
                                class="text-primary hover:text-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a href="https://aranyaportfolio.web.app/" class="text-primary hover:text-primary"><i
                                    class="fas fa-globe fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Fahim -->
        <div id="modal-fahim" class="modal">
            <div class="modal-content">
                <div class="modal-image">
                    <img src="https://cse.uiu.ac.bd/wp-content/uploads/sites/3/2024/04/F-H-min-1-240x300.jpg"
                        alt="Fahim Hafiz" class="rounded-full w-48 h-48 object-cover">
                </div>
                <div class="modal-details">
                    <h3 class="text-3xl font-semibold mb-2">
                        <span class="text-primary">Fahim</span> <span class="text-gray-800">Hafiz</span>
                    </h3>
                    <p class="text-gray-600 mb-1">Faculty Moderator / Developer</p>
                    <p class="text-gray-600 mb-3">Computer Science and Engineering</p>
                    <p class="text-gray-700 mb-4">Guides the team in robotics and software development, specializing in
                        embedded systems.</p>
                    <div class="contact-info">
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                            +880 987 654 3210
                        </p>
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-mail"></use>
                            </svg>
                            fahim@uiu.ac.bd
                        </p>
                    </div>
                    <div class="social-links">
                        <div class="flex justify-end space-x-6">
                            <a href="https://github.com/fahimhafiz" class="text-primary hover:text-primary"><i
                                    class="fab fa-github fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/fahim-hafiz-47b3a5154"
                                class="text-primary hover:text-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                            <a href="https://fahimhafiz.com" class="text-primary hover:text-primary"><i
                                    class="fas fa-globe fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Abid -->
        <div id="modal-abid" class="modal">
            <div class="modal-content">
                <div class="modal-image">
                    <img src="/assets/img/Executive/abid.jpg" alt="Md. Abid Hossain"
                        class="rounded-full w-48 h-48 object-cover">
                </div>
                <div class="modal-details">
                    <h3 class="text-3xl font-semibold mb-2">
                        <span class="text-primary">Md. Abid</span> <span class="text-gray-800">Hossain</span>
                    </h3>
                    <p class="text-gray-600 mb-1">Robotics Developer</p>
                    <p class="text-gray-600 mb-3">Computer Science and Engineering</p>
                    <p class="text-gray-700 mb-4">Expert in AI-driven robotics solutions, enhancing autonomous systems
                        for competitions.</p>
                    <div class="contact-info">
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                            +880 456 789 1234
                        </p>
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-mail"></use>
                            </svg>
                            abid@uiu.ac.bd
                        </p>
                    </div>
                    <div class="social-links">
                        <div class="flex justify-end space-x-6">
                            <a href="https://github.com/Abidh56" class="text-primary hover:text-primary"><i
                                    class="fab fa-github fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/abidhossain" class="text-primary hover:text-primary"><i
                                    class="fab fa-linkedin fa-2x"></i></a>
                            <a href="https://abidhossain.com" class="text-primary hover:text-primary"><i
                                    class="fas fa-globe fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Sifat -->
        <div id="modal-sifat" class="modal">
            <div class="modal-content">
                <div class="modal-image">
                    <img src="https://avatars.githubusercontent.com/u/12345678?v=4" alt="Sifat Ali"
                        class="rounded-full w-48 h-48 object-cover">
                </div>
                <div class="modal-details">
                    <h3 class="text-3xl font-semibold mb-2">
                        <span class="text-primary">Sifat</span> <span class="text-gray-800">Ali</span>
                    </h3>
                    <p class="text-gray-600 mb-1">Front-End Developer</p>
                    <p class="text-gray-600 mb-3">Computer Science and Engineering</p>
                    <p class="text-gray-700 mb-4">Designs intuitive and responsive user interfaces for the club's web
                        applications.</p>
                    <div class="contact-info">
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                            +880 321 654 9876
                        </p>
                        <p class="text-primary text-sm">
                            <svg class="inline-block">
                                <use xlink:href="#icon-mail"></use>
                            </svg>
                            sifat@uiu.ac.bd
                        </p>
                    </div>
                    <div class="social-links">
                        <div class="flex justify-end space-x-6">
                            <a href="https://github.com/SifatAli0081" class="text-primary hover:text-primary"><i
                                    class="fab fa-github fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/sifat-ali" class="text-primary hover:text-primary"><i
                                    class="fab fa-linkedin fa-2x"></i></a>
                            <a href="https://sifatali.com" class="text-primary hover:text-primary"><i
                                    class="fas fa-globe fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include ABSPATH . '_includes/footer.php'; ?>

    <script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'flex';
        modal.querySelector('.modal-content').style.animation = 'fadeIn 0.3s ease-out';
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.querySelector('.modal-content').style.animation = 'fadeOut 0.3s ease-out';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    window.onclick = function(event) {
        const modals = document.getElementsByClassName('modal');
        for (let modal of modals) {
            if (event.target === modal) {
                closeModal(modal.id);
            }
        }
    };

    // Add fade-in/out animations
    const styleSheet = document.createElement('style');
    styleSheet.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: scale(0.95); }
                to { opacity: 1; transform: scale(1); }
            }
            @keyframes fadeOut {
                from { opacity: 1; transform: scale(1); }
                to { opacity: 0; transform: scale(0.95); }
            }
        `;
    document.head.appendChild(styleSheet);
    </script>
</body>

</html>