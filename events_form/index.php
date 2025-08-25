<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
</head>

<body>
    <?php include ABSPATH . '_includes/header.php'; ?>

    <section
        class="w-[85%] max-w-[1440px] mx-auto mt-20 flex flex-col items-center sm:flex-row gap-8 sm:mt-5 mt-[160px] sm:pt-5 pt-[10px]">
        <div class="w-full sm:w-1/2 rounded-xl">
            <img class="rounded-xl w-full h-[400px] object-cover" src="/assets/img/Events/Research101.jpg"
                alt="Research 101 Banner">
        </div>
        <div class="w-full sm:w-1/2 flex flex-col">
            <div class="my-6">
                <h1 class="text-2xl lg:text-4xl xl:text-[3.25rem] text-primary font-semibold">Research 101</h1>
                <p class="text-lg">Join us for Research 101, a comprehensive workshop designed to
                    introduce students to the fundamentals of research methodologies, data analysis techniques, and
                    effective presentation skills, empowering them to excel in their academic pursuits.</p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="var(--color-primary)" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.2848 18.9935C12.1567 19.0875 12.0373 19.1728 11.9282 19.2493C11.8118 19.1721 11.6827 19.0833 11.5427 18.9832C10.8826 18.5109 10.0265 17.8176 9.18338 16.9529C7.45402 15.1792 6 12.9151 6 10.5C6 7.18629 8.68629 4.5 12 4.5C15.3137 4.5 18 7.18629 18 10.5C18 12.8892 16.4819 15.1468 14.6893 16.9393C13.8196 17.8091 12.9444 18.5099 12.2848 18.9935ZM19.5 10.5C19.5 16.5 12 21 12 21C11.625 21 4.5 16.5 4.5 10.5C4.5 6.35786 7.85786 3 12 3C16.1421 3 19.5 6.35786 19.5 10.5ZM13.5 10.5C13.5 11.3284 12.8284 12 12 12C11.1716 12 10.5 11.3284 10.5 10.5C10.5 9.67157 11.1716 9 12 9C12.8284 9 13.5 9.67157 13.5 10.5ZM15 10.5C15 12.1569 13.6569 13.5 12 13.5C10.3431 13.5 9 12.1569 9 10.5C9 8.84315 10.3431 7.5 12 7.5C13.6569 7.5 15 8.84315 15 10.5Z" />
                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    Room 126
                </p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 7V12L13.5 14.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                        stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    Oct 9th, 2024
                </p>
            </div>
        </div>
    </section>

    <section class="w-[85%] max-w-3xl mx-auto mt-20 flex flex-col sm:flex-row gap-8">
        <div class="nut_box_4 w-full sm:w-2/3">
            <div class="content">
                <form>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Full Name<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Enter Full Name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Institution<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Institution name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Category<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Category name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[350px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Bkash Ref. No<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="1234567890"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>

                    <div class="w-full sm:w-4/4 flex flex-row items-center justify-end mt-4">
                        <button type="submit" value="Submit"
                            class="flex justify-center items-center rounded-full bg-primary text-white font-bold text-[18px] w-[2rem] h-[2rem] cursor-pointer hover:bg-[#0E1E2D] transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col gap-8 w-full sm:w-1/3">
            <div class="nut_box_4 w-full">
                <div class="content flex flex-col items-center justify-center">
                    <h3 class="text-xl text-primary font-semibold">Emergency Helpline</h3>
                    <a href="tel:01512345678" class="text-md">01512345678</a>
                    <a href="mailto:contact@example.com" class="text-md">contact@example.com</a>
                </div>
            </div>
            <div class="nut_box_4 w-full">
                <div class="content">
                    <h3 class="text-xl font-semibold">
                        Explore Other Upcoming Events
                    </h3>
                    <div class="w-full sm:w-3/4 flex flex-row items-center justify-end mt-4">
                        <button type="submit" value="Submit"
                            class="flex justify-center items-center rounded-full bg-primary text-white font-bold text-[18px] w-[2rem] h-[2rem] cursor-pointer hover:bg-[#0E1E2D] transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>