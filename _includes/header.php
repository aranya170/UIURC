<style>
    html,
    body {
        overflow-x: hidden;
        font-family: 'Exo 2', sans-serif;
        margin: 0;
        padding: 0;
    }

    @media (max-width: 1024px) {

        html,
        body {
            overflow-x: hidden;
        }
    }

    .main-btn {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .main-btn:hover .pulse {
        fill: #F79B72;
    }

    .main-btn:focus {
        outline: none;
    }

    @media (max-width: 640px) {

        html,
        body {
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
            touch-action: pan-y;
            /* Restrict touch scrolling to vertical only */
        }

        .navbar {
            width: 100%;
            max-width: 100vw;
            /* Ensure navbar doesn't exceed viewport width */
            overflow-x: hidden;
            position: fixed;
            top: 0;
            left: 0;
        }

        .navbar-svg {
            width: 100%;
            max-width: 100vw;
            /* Force SVG to stay within viewport */
            height: auto;
            max-height: 80px;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            /* Prevent SVG content from overflowing */
        }

        /* Ensure nut icons stay within viewport */
        .nut-icon-top-right,
        .nut-icon-middle-right {
            left: calc(100% - 20px);
            /* Keep icons within viewport */
        }

        /* Prevent horizontal scrolling for all navbar children */
        .navbar * {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Ensure mobile menu stays within bounds */
        .mobile-menu {
            max-width: 160px;
            right: 10px;
            overflow-x: hidden;
        }
    }
</style>

<body class="sm:mt-0 mt-[160px] sm:pt-0 pt-[10px]">

    <hr class="w-full -z-10 bg-black h-[2px] absolute top-[78.5px] -translate-y-[1px] sm:block hidden">

    <nav class="w-[625px] h-[143px] p-0 m-0 relative sm:w-[625px] sm:h-[143px] w-full h-auto" style="z-index: 20;">
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 w-full h-auto" viewBox="0 0 625 143"
            preserveAspectRatio="xMinYMin meet">
            <path fill="#0c1723"
                d="M625 0v79.396H304.73a61.195 61.195 0 01-.844.557c-8.001 5.649-25.531 18.001-31.642 22.269-3.847 2.682-5.59 5.761-6.26 8.197v15.621A15.896 15.896 0 01250 142.366H0V0h625z" />
        </svg>

        <svg fill="#000000" width="15px" height="15px" class="absolute top-[10px] left-[10px] z-10 hidden sm:block"
            viewBox="0 0 24 24" id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg">
            <path id="primary"
                d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                style="fill: #fff;"></path>
        </svg>
        <svg fill="#000000" width="15px" height="15px" class="absolute top-[110px] left-[10px] z-10 hidden sm:block"
            viewBox="0 0 24 24" id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg">
            <path id="primary"
                d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                style="fill: #fff;"></path>
        </svg>
        <svg fill="#000000" width="15px" height="15px" class="absolute top-[110px] left-[240px] z-10 hidden sm:block"
            viewBox="0 0 24 24" id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg">
            <path id="primary"
                d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                style="fill: #fff;"></path>
        </svg>
        <svg fill="#000000" width="15px" height="15px" class="absolute top-[10px] left-[600px] z-10 hidden sm:block"
            viewBox="0 0 24 24" id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg">
            <path id="primary"
                d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                style="fill: #fff;"></path>
        </svg>
        <svg fill="#000000" width="15px" height="15px" class="absolute top-[55px] left-[600px] z-10 hidden sm:block"
            viewBox="0 0 24 24" id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg">
            <path id="primary"
                d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
                style="fill: #fff;"></path>
        </svg>
        <a href="\index.php">
            <img src="\assets\img\logo\Icon.png"
                class="absolute sm:top-[25px] sm:left-[70px] top-[10px] left-[40px] z-10 sm:h-20 sm:w-20 h-16 w-16"
                alt="">
        </a>


    </nav>

    <div id="fullMenu" class="hidden lg:flex items-center justify-center gap-[30px] absolute top-[25px] right-10">
        <a href="\index.php"
            class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
            Home
        </a>
        <a href="\All_Events\index.php"
            class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
            Events
        </a>
        <a href="\Achievements\index.php"
            class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
            Achievements
        </a>
        <a href="\AboutUs\index.php"
            class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
            About Us
        </a>
    </div>

    <!-- Sidebar Button -->
    <div class="lg:hidden absolute top-[8px] right-2 z-20">
        <div class="bg-[#0c1723] p-2 rounded-md">
            <button id="sidebar-button" data-sidebar-status="close" class="text-white focus:outline-none">
                <!-- Hamburger Icon -->
                <svg id="hamburger-icon" class="w-8 h-8 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <!-- Close Icon -->
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Sidebar Panel -->
    <div id="sidebar-slab"
        class="fixed top-0 right-0 bottom-0 left-0 w-full h-full bg-[#0c1723] text-white z-10 transform transition-transform duration-700 translate-x-full overflow-hidden flex items-center justify-center">

        <nav class="flex flex-col items-center gap-[40px] w-full px-[50px]">
            <!-- Link Group -->
            <div class="w-full text-center group">
                <a href="\index.php" class="text-sm font-sans font-medium text-gray-300 hover:text-red-500">Home</a>
                <hr class="w-full h-[2px] mt-[10px] bg-white transition-colors duration-300 group-hover:bg-red-500">
            </div>
            <div class="w-full text-center group">
                <a href="\All_Events\index.php"
                    class="text-sm font-sans font-medium text-gray-300 hover:text-red-500">Events</a>
                <hr class="w-full h-[2px] mt-[10px] bg-white transition-colors duration-300 group-hover:bg-red-500">
            </div>
            <div class="w-full text-center group">
                <a href="\Achievements\index.php"
                    class="text-sm font-sans font-medium text-gray-300 hover:text-red-500">Achievements</a>
                <hr class="w-full h-[2px] mt-[10px] bg-white transition-colors duration-300 group-hover:bg-red-500">
            </div>
            <div class="w-full text-center group">
                <a href="\AboutUs\index.php"
                    class="text-sm font-sans font-medium text-gray-300 hover:text-red-500">About us</a>
                <hr class="w-full h-[2px] mt-[10px] bg-white transition-colors duration-300 group-hover:bg-red-500">
            </div>
        </nav>
    </div>

    <!-- Toggle Script -->
    <script>
        const body = document.querySelector('body');
        const sidebarButton = document.getElementById('sidebar-button');
        const sidebarSlab = document.getElementById('sidebar-slab');

        sidebarButton.addEventListener('click', () => {
            const status = sidebarButton.getAttribute('data-sidebar-status');
            if (status === 'close') {
                sidebarSlab.classList.remove('translate-x-full');
                sidebarSlab.classList.add('translate-x-0');
                body.classList.add('overflow-hidden');
                sidebarButton.setAttribute('data-sidebar-status', 'open');
            } else {
                sidebarSlab.classList.add('translate-x-full');
                sidebarSlab.classList.remove('translate-x-0');
                body.classList.remove('overflow-hidden');
                sidebarButton.setAttribute('data-sidebar-status', 'close');
            }
        });
    </script>