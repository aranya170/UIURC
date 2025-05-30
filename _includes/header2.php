<?php include ABSPATH . '_includes\svg.php'; ?>

<header class="w-full h-[100px] bg-grey-100 relative flex justify-between">
    <div class="logo-slab w-full max-w-[315px] flex items-center justify-center">
        <a href="">
            <img src="/assets/img/logo/Icon.png" alt="UIU Robotics Club Logo" class="logo-slab__img cursor-pointer"
                onclick="window.location.href='/index.php'" />
        </a>
    </div>


    <div class="logo-slab_tail cursor-pointer" onclick="window.location.href='/index.php'">
        <span class="hidden">
            <?= SITE_NAME ?? 'UIURC' ?>
        </span>
    </div>

    <hr class="hidden sm:block w-full -z-10 bg-black h-[2px] absolute top-[47px] -translate-y-1/2">
    <div class="navbar-slab flex flex-col items-top justify-start">
        <div class="h-[47px] flex items-center justify-end">

            <div class="hidden sm:flex items-center justify-center mx-5">
                <a href="https://www.facebook.com/uiurobotics" class="rounded-full border-3 me-5">
                    <svg class="m-0.5 w-7 rounded-full" viewBox="0 0 16 16" fill="#000"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#facebook"></use>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/uiu-robotics/" class="rounded-full border-3 me-5">
                    <svg class="m-0.5 w-7 rounded-full" viewBox="0 0 16 16" fill="#000"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#linkedin-full"></use>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@uiu.robotics" class="rounded-full border-3 me-5">
                    <svg class="m-0.5 w-7 rounded-full" viewBox="0 0 16 16" fill="#000"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#youtube-full"></use>
                    </svg>
                </a>
            </div>

            <button id="sidebar-button" data-sidebar-status="close"
                class="w-[47px] h-[47px] bg-primary flex items-center justify-center md:hidden z-1000" type="button">
                <svg class="navbar-open__icon" width="24" height="24" viewBox="0 0 24 24" fill="#fff"
                    xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#hamburger"></use>
                </svg>
            </button>
        </div>
        <div class="h-[53px] hidden md:flex items-center justify-end z-1">
            <div class="flex items-center justify-center mx-5">
                <a href="\index.php" class="me-4 text-sm md:text-lg xl:text:2xl">
                    Home
                </a>
                <a href="\All_Events\index.php" class="me-4 text-sm md:text-lg xl:text:2xl">
                    Events
                </a>
                <a href="\Achievements\index.php" class="me-4 text-sm md:text-lg xl:text:2xl">
                    Acheivements
                </a>
                <a href="\AboutUs\index.php" class="me-4 text-sm md:text-lg xl:text:2xl">
                    <svg width="8rem" viewBox="0 0 215 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 16.878L17.986 0H6.469C2.896 0 0 2.91 0 6.5V16.878Z" fill="#FF3215" />
                        <path
                            d="M215 32.262C215.002 30.965 214.615 29.697 213.891 28.6212C213.166 27.5454 212.137 26.7109 210.934 26.225C210.481 25.889 210.056 25.595 209.706 25.365C205.447 22.319 201.182 19.2807 196.912 16.25C195.041 14.93 194.401 13.373 194.265 12.323V6.5C194.265 2.91 191.368 0 187.796 0H19.751L0 18.534V58.5C0 62.09 2.896 65 6.469 65H208.531C212.104 65 215 62.09 215 58.5V32.262Z"
                            fill="#D9D9D9" />
                        <path
                            d="M13.5457 47.8764V55.9731C13.5457 56.7602 15.0031 56.7786 15.0031 55.9731V47.8764C15.0031 46.9642 13.5457 46.9641 13.5457 47.8764Z"
                            stroke="black" />
                        <path
                            d="M8.99298 48.9299V54.8966C8.99299 55.4767 10.4504 55.4902 10.4504 54.8966V48.9299C10.4504 48.2577 8.99298 48.2577 8.99298 48.9299Z"
                            stroke="black" />
                        <path
                            d="M17.9055 48.9299V54.8966C17.9055 55.4767 19.3629 55.4902 19.3629 54.8966V48.9299C19.3629 48.2577 17.9055 48.2577 17.9055 48.9299Z"
                            stroke="black" />

                        <text x="50" y="40" font-size="24" fill="black">About Us</text>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<div id="sidebar-slab"
    class="fixed top-0 right-0 bottom-0 left-0 w-full h-full bg-[#404040] text-white z-10 transform transition-transform duration-700 translate-x-full overflow-hidden flex items-center justify-center">

    <nav class="flex flex-col items-center gap-[40px] w-full px-[50px]">
        <div class="w-full text-center">
            <a href="\index.php" class="text-sm font-sans font-medium text-gray hover:text-primary">
                Home
            </a>
            <hr class="w-full h-[2px] mt-[10px] bg-white">
        </div>
        <div class="w-full text-center">
            <a href="\All_Events\index.php" class="text-sm font-sans font-medium text-gray hover:text-primary">
                Events
            </a>
            <hr class="w-full h-[2px] mt-[10px] bg-white">
        </div>
        <div class="w-full text-center">
            <a href="\Achievements\index.php" class="text-sm font-sans font-medium text-gray hover:text-primary">
                Achievements
            </a>
            <hr class="w-full h-[2px] mt-[10px] bg-white">
        </div>
        <div class="w-full text-center">
            <a href="\AboutUs\index.php" class="text-sm font-sans font-medium text-gray hover:text-primary">
                About us
            </a>
            <hr class="w-full h-[2px] mt-[10px] bg-white">
        </div>
    </nav>

</div>


<script>
    const body = document.querySelector('body');
    const sidebarButton = document.getElementById('sidebar-button');
    const sidebarSlab = document.getElementById('sidebar-slab');
    sidebarButton.addEventListener('click', () => {
        const sidebarStatus = sidebarButton.getAttribute('data-sidebar-status');
        if (sidebarStatus === 'close') {
            sidebarSlab.classList.remove('translate-x-full');
            sidebarSlab.classList.add('translate-x-0');
            body.classList.add('overflow-hidden');
            // href link change to close
            sidebarButton.children[0].children[0].setAttribute('xlink:href', '#close');
            sidebarButton.setAttribute('data-sidebar-status', 'open');
        }
        if (sidebarStatus === 'open') {
            console.log('close');
            sidebarSlab.classList.add('translate-x-full');
            sidebarSlab.classList.remove('translate-x-0');
            body.classList.remove('overflow-hidden');
            // href link change to open
            sidebarButton.children[0].children[0].setAttribute('xlink:href', '#hamburger');
            sidebarButton.setAttribute('data-sidebar-status', 'close');
        }
    });
</script>