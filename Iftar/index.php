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
            <img class="rounded-xl w-full h-[400px] object-cover" src="\assets\img\Events\Iftar.jpg"
                alt="Research 101 Banner">
        </div>
        <div class="w-full sm:w-1/2 flex flex-col">
            <div class="my-6">
                <h1 class="text-2xl lg:text-4xl xl:text-[3.25rem] text-primary font-semibold">Majlish-e-Iftar</h1>
                <p class="text-lg">The UIU Robotics Club cordially invites you to Majlish-e-Iftar, a special evening of
                    togetherness, reflection, and celebration of the holy month of Ramadan! 🕌✨ <br>
                    Eligibility: Club Members & Alumni</p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="var(--color-primary)" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.2848 18.9935C12.1567 19.0875 12.0373 19.1728 11.9282 19.2493C11.8118 19.1721 11.6827 19.0833 11.5427 18.9832C10.8826 18.5109 10.0265 17.8176 9.18338 16.9529C7.45402 15.1792 6 12.9151 6 10.5C6 7.18629 8.68629 4.5 12 4.5C15.3137 4.5 18 7.18629 18 10.5C18 12.8892 16.4819 15.1468 14.6893 16.9393C13.8196 17.8091 12.9444 18.5099 12.2848 18.9935ZM19.5 10.5C19.5 16.5 12 21 12 21C11.625 21 4.5 16.5 4.5 10.5C4.5 6.35786 7.85786 3 12 3C16.1421 3 19.5 6.35786 19.5 10.5ZM13.5 10.5C13.5 11.3284 12.8284 12 12 12C11.1716 12 10.5 11.3284 10.5 10.5C10.5 9.67157 11.1716 9 12 9C12.8284 9 13.5 9.67157 13.5 10.5ZM15 10.5C15 12.1569 13.6569 13.5 12 13.5C10.3431 13.5 9 12.1569 9 10.5C9 8.84315 10.3431 7.5 12 7.5C13.6569 7.5 15 8.84315 15 10.5Z" />
                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    UIU Canteen
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
            <div class="mt-2 flex flex-row items-center gap-1 sm:mt-4 lg:mt-6 xl:mt-8">
                <!-- <a href="/events_form">
                    <svg class="w-30 lg:w-40 xl:w-50" viewBox="0 0 215 65" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_40_80)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16.9L18 0H6.5C2.9 0 0 2.9 0 6.5V16.9Z"
                                fill="#FF3215" />
                            <mask id="mask0_40_80" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="216" height="65">
                                <path
                                    d="M215 32.3C215 29.6 213.4 27.3 210.9 26.3C210.4 26 210 25.7 209.7 25.4C205.4 22.4 201.2 19.3 196.9 16.3C195 15 194.4 13.4 194.3 12.4V6.59998C194.3 2.99998 191.4 0.0999756 187.8 0.0999756H19.8L0 18.5V58.5C0 62.1 2.9 65 6.5 65H208.6C212.2 65 215.1 62.1 215.1 58.5V32.3H215Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#mask0_40_80)">
                                <path
                                    d="M218.7 164.7V-171.1H-3.69995V164.7H218.7ZM187 -22.7L189 -11L205.2 -21.5L187 -22.8V-22.7Z"
                                    fill="#101E2C" />
                                <path
                                    d="M27.8 -44L-3.39995 -71.5V-59.7L25.3 -37.7L105.5 -47.9L128.2 -14.5L109.7 -0.90004L56 -27.9L22.5 23.8L-3.29995 -7.70004V6.89996L-3.49995 51.9L-3.69995 111.3L6.10005 98.4L12.9 110.5L25 95.5L16 94.4L29 88.7L46.7001 56.6L50 82.5L65.2 73.8L48 95.2L44.1 84.8L35.9001 95.5L42.9001 107.3L46.2001 105.6L33.9001 129.3L36.8 111.6L22.2001 120.6L24.7001 109.7L10.3 124.4L17.3 124.9L-3.59995 140.9V164.7H161.9L147.6 139.7L169.5 157.1L165.5 145.6L176.7 151.7L192.5 122.1L194.7 131.1L204.5 122.6L218.7 92.2V84.4C218.6 84.4 200.4 119.3 200.4 119.3V102.5L173.6 131.5L161 122L186 96.9L173.7 119.7L189.8 109L200.4 92.5999L206.8 95.5L218.6 71.6V55.6L189.1 0.699951L218.6 -16.5V-30.8H174.8L188 41.5L117.6 3.29996L139 -10L112.2 -55.5L60.7001 -47.6L-0.899951 -110.1L90.8 -85.3L139.5 -125.3L169.1 -56.3L193.6 -97.4L191.9 -62.8L208.3 -94.1L217.6 -41L218.7 -45V-101.3L189.9 -112.8L169.6 -76.3L137.2 -170.5H122L133.8 -132.6L86.2 -95.2L18.6 -111.5L-1.99995 -170.9H-3.69995C-3.69995 -171 -3.69995 -102.8 -3.69995 -102.8L51.7001 -46.9L27.8 -44ZM186 -5.20004L183.1 -26.8L214.8 -24.3L186.1 -5.20004H186ZM125.9 144L123.3 150.6L8.60005 161.7V158.7L31.6 153.1L56.1 136.6V153.1L99.1 134.5L84.9 150.7L125.9 144.1V144Z"
                                    fill="#101824" />
                                <path d="M218.5 -13.5001L201.5 6.49994L218.5 30.6999V-13.5001Z" fill="#101824" />
                                <path
                                    d="M-3.39995 51.9L-0.199951 89.1L19.3 92.6L51.7001 38.8L55.4001 70.9L71.5 51.1L93.8 71.1L58.2001 110.9L69.4 79.5L46.6 104.4L52.4001 130.7L18.2001 149.3L26.1 126.7L4.88758e-05 149.2L-1.59995 164.8H6.80005C6.80005 164.7 6.80005 164.7 6.80005 164.7H12.8L153.1 162.4L137.7 128.9L172.6 145.9L194.5 115.2L174 138.2L152.4 124.2L192 84.4L186 107.9L194.6 97.4L197.4 86.7L218.6 66.7L186.7 5.49998L198.8 54.1L127.1 114.1L68.5 117.8L122.3 56.6L56.2001 -5.20002L117.5 40L115.9 28.4L144.5 58L134 55L109.6 102.5L94.2 107.4L113.5 106.9L165.2 64.8L142.4 40.8L177.5 56.2L57.6 -8.80002L69.9 -9.40002L58.5 -18.4L12.6 54.2L3.00005 32.5L15.1 34.9L-3.29995 6.89997L-3.69995 6.29998V48.4L-3.39995 51.9ZM8.60005 158.7L31.6 153.1L56.1 136.6V153.1L99.1 134.5L84.9 150.7L125.9 144.1L123.3 150.7L8.60005 161.8V158.8V158.7ZM130.8 116.9L160.8 91L138.1 121.8L98.2 138.6L119.6 122.3L62.2001 142.8L59.1 125.3L130.8 117V116.9Z"
                                    fill="#101F30" />
                                <path
                                    d="M199 -63.6L184 -52.8L185.7 -79.7L166.2 -45.9L151.3 -81.9L148.4 -63.5L132.8 -45.8L130.6 -62.9L125 -44.4L153 4.19997L141.6 -3.20002L128 4.09998L182.3 33.6L166.5 -34.7L190.1 -34.8L177.2 -42L211.9 -39L199 -63.6Z"
                                    fill="#101F30" />
                                <path
                                    d="M18 0.199963L7.70005 -3.20004L23.1 13.7L33.5 -3.20004L24.5 -11H37.1L45.8 -23.2L31.5 -25.1L62.5 -39.5L22.8 -28.5L-3.69995 -49.6V-24.2L18 0.199963Z"
                                    fill="#101F30" />
                                <path
                                    d="M17 -6.30004L20.9 1.79996H15L23 8.39996L29.8 -2.10004L19.9 -13.3L35 -14L37.7001 -19.2L20.9 -24.3L-3.69995 -45.6V-27.5L17 -6.30004Z"
                                    fill="#14304C" />
                                <path
                                    d="M152.8 -58.7L138.4 -35.8L168.5 15.6L144.3 4.09995L141.2 8.39996L178.9 29.1L154.1 -70.8L152.8 -58.7Z"
                                    fill="#14304C" />
                                <path d="M210.8 60.6L199.9 42.9L203.7 57.1L165.3 89.9L210.8 60.6Z" fill="#14304C" />
                                <path
                                    d="M7.19995 29.5L-2.30005 22.1L1.39995 86.3L13.7 87.7L52.4 11.9L11.7 61.3L0.599951 34.9L0.999951 29.7L7.19995 29.5Z"
                                    fill="#14304C" />
                                <path d="M65.5 35.5999L65.4 40.7999L74 25.1L55.7 1.19995L57.2 60.0999L65.5 35.5999Z"
                                    fill="#14304C" />
                                <path d="M97.6999 78.0999L114.8 59.3999L96.8999 44.4999L107.5 61.0999L97.6999 78.0999Z"
                                    fill="#14304C" />
                                <path d="M158.6 64.6L144.1 46.1L150.5 64.2L123.3 91.1L158.6 64.6Z" fill="#14304C" />
                                <path d="M79.4 41.9L92.2 60.1L80.1 36.4L64.2 53L79.4 41.9Z" fill="#14304C" />
                                <path d="M-3.70004 164.7L218.7 164.7L218.7 -50.9001L-3.70004 -50.9001L-3.70004 164.7Z"
                                    fill="url(#paint0_linear_40_80)" />
                                <path d="M0 47.8V39L9 47.8H10.3V50.7H11.5V44.6L31.9 64.9H20.3L14.6 59.2H11.4L0 47.8Z"
                                    fill="#FF3215" />
                                <path
                                    d="M44.3001 65.1999H34.7001L22.6001 53.0999H25.8001V50.7999H20.1001L8.1001 38.7H15.0001V41.4H20.5001L44.3001 65.1999ZM35.0001 64.4H42.4001L20.1001 42.0999H14.1001V39.4H9.8001L20.3001 50H26.5001V53.9H24.4001L34.9001 64.4H35.0001Z"
                                    fill="#FF3215" />
                                <path
                                    d="M26.2001 39H35.3001L61.1001 64.9H49.7001L35.3001 50.4V47.5H31.9001L26.1001 41.7L26.2001 39Z"
                                    fill="#FF3215" />
                                <path
                                    d="M56.5 48.1H49.5999L40.2 38.6H47L56.5 48.1ZM50 47.3H54.5999L46.7 39.4H42.0999L49.9 47.3H50Z"
                                    fill="#FF3215" />
                                <path d="M58 53.2V39L66.1 47.1V56H67.1V47.7L84.3 64.9H66.6L63.9 62.2V59L58 53.2Z"
                                    fill="#FF3215" />
                            </g>
                            <text x="65" y="40" font-size="24" fill="white">Register</text>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_40_80" x1="107.5" y1="-50.9001" x2="107.5" y2="164.7"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#101824" stop-opacity="0.2" />
                                <stop offset="0.3" stop-color="#101824" stop-opacity="0.6" />
                                <stop offset="0.6" stop-color="#101824" stop-opacity="0.8" />
                                <stop offset="1" stop-color="#101824" stop-opacity="0.9" />
                            </linearGradient>
                            <clipPath id="clip0_40_80">
                                <rect width="215" height="65" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a> -->
                <h4 class="text-lg">Registration is closed now</h4>
            </div>
        </div>
    </section>

    <section class="w-[85%] max-w-[1440px] mx-auto mt-20">
        <!-- Title -->
        <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
            <span class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl text-nowrap font-semibold uppercase">
                :: Event Gallery
            </span>
            <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                <div class="bg-primary absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full"></div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div id="gallery" class="flex flex-wrap items-center justify-center mt-10 gap-6 rounded-xl">
            <!-- Images injected here -->
        </div>

        <script>
        const photos = [{
                src: "img/1.jpg",
                alt: "Event Photo 1"
            },
            {
                src: "img/2.jpg",
                alt: "Event Photo 2"
            },
            {
                src: "img/3.jpg",
                alt: "Event Photo 3"
            },
            {
                src: "img/4.jpg",
                alt: "Event Photo 4"
            },
            {
                src: "img/5.jpg",
                alt: "Event Photo 5"
            },
            {
                src: "img/6.jpg",
                alt: "Event Photo 6"
            },
            {
                src: "img/7.jpg",
                alt: "Event Photo 7"
            },
            {
                src: "img/8.jpg",
                alt: "Event Photo 8"
            },
            {
                src: "img/9.jpg",
                alt: "Event Photo 9"
            },
            {
                src: "img/10.jpg",
                alt: "Event Photo 10"
            },
            {
                src: "img/11.jpg",
                alt: "Event Photo 11"
            }
        ];

        const gallery = document.getElementById('gallery');

        photos.forEach(photo => {
            const item = document.createElement('div');
            item.className = 'group relative w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2';

            const img = document.createElement('img');
            img.src = photo.src;
            img.alt = photo.alt;
            img.loading = 'lazy';
            img.className =
                'w-full h-64 object-cover rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105 cursor-pointer';
            img.onerror = () => {
                img.src = 'https://via.placeholder.com/400x300?text=Image+Not+Found';
            };

            const overlay = document.createElement('div');
            overlay.className =
                'absolute inset-0 flex items-center justify-center pointer-events-none group-hover:pointer-events-auto transition-opacity duration-300 rounded-xl';

            overlay.innerHTML = `
                <div class="w-full h-full backdrop-blur-sm bg-transparent flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300">
                    <a href="${photo.src}" target="_blank" title="View Full Image"
                       class="bg-white text-primary px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">
                        View
                    </a>
                    <a href="${photo.src}" download title="Download Image"
                       class="bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">
                        Download
                    </a>
                </div>
            `;

            item.appendChild(img);
            item.appendChild(overlay);
            gallery.appendChild(item);
        });
        </script>
    </section>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>