<?php include_once '../_settings/config.php'; ?>

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
            <img class="rounded-xl w-full h-[400px] object-cover" src="/assets/img/Events/Meet&Greet.jpg"
                alt="Research 101 Banner">
        </div>
        <div class="w-full sm:w-1/2 flex flex-col">
            <div class="my-6">
                <h1 class="text-2xl lg:text-4xl xl:text-[3.25rem] text-primary font-semibold">Meet and Greet</h1>
                <p class="text-lg">The most awaited Phase 2 of Spring 2025 Trimester’s Recruitment Session is finally
                    back on track!
                    This time it isn’t just a regular meet-up, it’s a special alumni reunion + interactive meet-&-greet
                    designed to inspire, connect, and guide!</p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="var(--color-primary)" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.2848 18.9935C12.1567 19.0875 12.0373 19.1728 11.9282 19.2493C11.8118 19.1721 11.6827 19.0833 11.5427 18.9832C10.8826 18.5109 10.0265 17.8176 9.18338 16.9529C7.45402 15.1792 6 12.9151 6 10.5C6 7.18629 8.68629 4.5 12 4.5C15.3137 4.5 18 7.18629 18 10.5C18 12.8892 16.4819 15.1468 14.6893 16.9393C13.8196 17.8091 12.9444 18.5099 12.2848 18.9935ZM19.5 10.5C19.5 16.5 12 21 12 21C11.625 21 4.5 16.5 4.5 10.5C4.5 6.35786 7.85786 3 12 3C16.1421 3 19.5 6.35786 19.5 10.5ZM13.5 10.5C13.5 11.3284 12.8284 12 12 12C11.1716 12 10.5 11.3284 10.5 10.5C10.5 9.67157 11.1716 9 12 9C12.8284 9 13.5 9.67157 13.5 10.5ZM15 10.5C15 12.1569 13.6569 13.5 12 13.5C10.3431 13.5 9 12.1569 9 10.5C9 8.84315 10.3431 7.5 12 7.5C13.6569 7.5 15 8.84315 15 10.5Z" />
                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    Room 631 & 632
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
                    Aug 2, 2025
                </p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1 sm:mt-4 lg:mt-6 xl:mt-8">
                <h4 class="text-lg">Registration is closed now</h4>
            </div>
        </div>
    </section>

    <section class="w-[85%] max-w-[1440px] mx-auto mt-20">
        <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
            <span class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl text-nowrap font-semibold uppercase">
                :: Our Guests
            </span>
            <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                <div class="bg-primary absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                </div>
            </div>
        </div>

        <div class="flex flex-row flex-wrap items-center justify-center mt-10">
            <div class="flex flex-col max-w-[200px] mt-4">
                <img class="mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl border border-3 object-cover"
                    src="/assets/img/Events/akibbhai.jpg">
                <p class="text-center text-3xl px-2 mb-2">Md Ifraham Iqbal Aqib</p>
                <p class="text-center text-md px-2">Master of Science, FAU Erlangen-Nürnberg</p>
            </div>
        </div>
    </section>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>