<?php
include_once '_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
        .nav-arrow-right .ellipsis-content {
            font-size: 1.5rem;
            /* Adjust to match arrow size */
            font-weight: bold;
            color: currentColor;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            /* Match SVG size */
            height: 24px;
        }

        .nav-arrow-right .arrow-content.hidden,
        .nav-arrow-right .ellipsis-content.hidden {
            display: none;
        }
    </style>
</head>

<body>
    <?php include ABSPATH . '_includes/header.php'; ?>

    <section
        class="w-full max-w-[1440px] mx-auto mt-20 px-2 sm:px-10 mb-16 py-10 flex flex-col sm:flex-row gap-4 justify-center">
        <!-- Text and SVG Container -->
        <div class="w-full sm:w-1/2 flex-1 self-start flex flex-col justify-start items-start">
            <svg class="w-full sm:w-[400px] md:w-[500px] lg:w-[550px] max-w-full" viewBox="0 0 610 206" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M48.6 156.3L47.8 159.6H41.8L39.5 169.1H45.5L44.6 172.4H38.5L34.6 188.1H31.2L35.1 172.4H28.8L24.9 188.1H21.5L25.4 172.4H19.1L20 169.1H26.3L28.6 159.6H22.1L22.9 156.3H29.4L33.3 140.6H36.7L32.8 156.3H39.1L43 140.6H46.4L42.5 156.3H48.4H48.6ZM38.4 159.6H32.1L29.7 169.1H36L38.3 159.6H38.4Z"
                    fill="#FF3215" />
                <path
                    d="M90.6 187.5L88 188.6L78.8 167.7C73.4 168.7 68.1 171.2 63 175.1C57.9 179 53.7 183.7 50.6 189.3L48.4 190L69.7 139.1L80.8 164.4C81.4 164.4 82 164.2 82.8 164.2C83.5 164.2 84.3 164.2 85.3 164.2H89C89 164.3 88.1 167.1 88.1 167.1H86.3C85.4 167 84.6 167 83.9 167.1C83.2 167.1 82.5 167.2 82 167.3L90.8 187.6L90.6 187.5ZM77.6 165.1L69.6 146.8L56.4 177.9C59.7 174.4 63.2 171.5 66.7 169.4C70.3 167.3 73.9 165.9 77.6 165.1Z"
                    fill="#FF3215" />
                <path
                    d="M117.8 170C117.8 175.6 115.6 180.1 111.2 183.6C106.8 187.1 100.7 188.9 93.1 188.9C85.5 188.9 90.7 188.8 89.4 188.6C89 188.6 88.4 188.4 87.8 188.3L89.1 185.6C89.4 185.6 89.7 185.7 89.9 185.7C91.3 185.9 92.3 186 93.1 186C99.8 186 105.1 184.5 109 181.6C112.8 178.7 114.7 174.9 114.7 170.3C114.7 165.7 112.7 163.8 108.6 162.5C104.8 161.7 101 160.9 97.2 160.1C93.1 158.9 91.1 156.4 91.1 152.6C91.1 148.8 92.7 146.6 96 144.1C99.8 141.1 104.5 139.6 110.3 139.6C116.1 139.6 112.9 139.6 114.1 139.9C114.5 139.9 115.1 140.1 115.8 140.2L114.5 142.9C114.1 142.9 113.9 142.8 113.7 142.8C112.4 142.6 111.3 142.5 110.4 142.5C105 142.5 100.8 143.7 97.8 146.2C95.3 148.2 94.1 150.5 94.1 153.1C94.1 155.7 96.2 156.9 100.3 157.8C107.2 159.4 111 160.3 111.8 160.7C116 162.6 118.1 165.7 118.1 170.1L117.8 170Z"
                    fill="#FF3215" />
                <path d="M140.9 151L140.3 153.9H129V188H126V153.9H118.8L119.4 151H126V139.7H129V151H140.9Z"
                    fill="#FF3215" />
                <path
                    d="M167.9 158.6C167.9 162.9 166 166.5 162.2 169.7C158.2 173 153.1 174.6 147 174.6H145V171.9H147C152.5 171.9 157 170.6 160.4 167.8C163.6 165.3 165.1 162.2 165.1 158.7C165.1 155.2 164.6 155.7 163.7 154.7C162.7 153.7 161.4 153.3 159.8 153.3C155.8 153.3 152 155.7 148.4 160.4C144.7 165.1 142.9 170 142.9 175.1C142.9 180.2 143.8 181.2 145.5 183C147.3 184.8 149.7 185.8 152.9 185.8C156.1 185.8 157.5 185.4 160.3 184.5C161.2 184.2 162.4 183.8 163.8 183.2L164.8 185.6C162.9 186.6 160.9 187.4 158.8 187.8C156.7 188.3 154.8 188.5 152.9 188.5C149 188.5 145.9 187.3 143.6 185C141.2 182.7 140 179.6 140 175.5C140 169.4 142 163.7 146.1 158.4C150.1 153.1 154.6 150.4 159.5 150.4C164.4 150.4 164.1 151.1 165.7 152.6C167.2 154.1 168 156.1 168 158.6H167.9Z"
                    fill="#FF3215" />
                <path
                    d="M203.5 163.4C203.5 169.5 201.2 175 196.5 179.8C191.5 185 185 188 177.2 188.8L177.9 186C184.6 185.3 190.1 182.4 194.5 177.6C198.5 173.2 200.5 168.3 200.5 163C200.5 157.7 199.7 157.9 198.2 156C196.6 154.2 194.7 153.3 192.4 153.3C187.6 153.3 183.6 156.5 180.2 162.8C176.9 169.2 175.2 176.9 175.2 185.9V205.1H172.4V151.1H175.3V169.3C176.3 163.7 178.5 159.1 181.7 155.7C184.9 152.3 188.5 150.6 192.4 150.6C196.3 150.6 198.3 151.8 200.4 154.1C202.5 156.4 203.6 159.6 203.6 163.6L203.5 163.4Z"
                    fill="#FF3215" />
                <path d="M233.8 140.6L233.1 143.6H220.1V188H217.1V143.6H202.6L203.3 140.6H233.8Z" fill="#FF3215" />
                <path
                    d="M257.3 167.5C257.3 173.4 255.3 178.5 251.3 182.6C247.5 186.6 243.2 188.5 238.5 188.5C233.8 188.5 232.1 187.2 229.7 184.5C227.3 181.9 226.1 178.5 226.1 174.2C226.1 169.9 227.6 164.1 230.6 160.2C233.1 157 236.3 154.5 240.3 152.6C243.5 151.1 246.5 150.4 249.3 150.4L248.9 151.7C242.5 153.6 237.6 156.5 234.2 160.5C230.8 164.5 229.1 169 229.1 174.1C229.1 179.2 230 180.4 231.7 182.5C233.4 184.7 235.6 185.7 238.4 185.7C242.3 185.7 245.8 184 249.1 180.5C252.6 176.8 254.4 172.3 254.4 167.2C254.4 162.1 253.6 162.1 252 160.5C250.4 158.9 248.3 158.1 245.5 158.1H244L245.1 155.5H246.7C249.6 155.4 252.1 156.5 254.2 158.7C256.3 160.9 257.3 163.9 257.3 167.5Z"
                    fill="#FF3215" />
                <path
                    d="M302.7 154.3C302.7 157.6 302.3 161 301.4 164.4C300.6 167.8 299.2 171.8 297.2 176.3L292.1 188.2L290.9 188.9L279.6 157.4L268 188.5L266.6 188.9L258.9 151.4L261.9 150.5L268 180.3L279.9 149.2L291.7 182.2L295.7 172.9C297.2 169.5 298.3 166.2 299 163.1C299.7 160 300 157.1 300 154.4V152.4C300 152 299.9 151.5 299.8 151.1H302.6C302.8 152 302.9 153.1 302.9 154.4L302.7 154.3Z"
                    fill="#FF3215" />
                <path
                    d="M339.2 150.7L338.3 153.2H334.9C326.8 153.2 320.1 155.3 314.9 159.7C309.9 164 307.3 169.3 307.3 175.6C307.3 181.9 308.1 181.3 309.8 183.1C311.3 184.8 313.3 185.7 315.8 185.7C318.3 185.7 320.5 184.6 322.3 182.4C323.8 180.6 325.5 177.1 327.3 172C329.1 167 331 161.7 332.9 156.3L335.3 154.6V188H332.4V165.2C330 173.9 327.4 180.1 324.6 183.7C322.1 186.9 319.1 188.6 315.5 188.6C311.9 188.6 309.7 187.4 307.6 185C305.5 182.6 304.5 179.3 304.5 175.2C304.5 168.9 307 163.4 311.9 158.6C317.5 153.2 325 150.5 334.3 150.5C343.6 150.5 336.3 150.5 337.1 150.5C337.9 150.5 338.5 150.6 339 150.7H339.2Z"
                    fill="#FF3215" />
                <path
                    d="M362.8 159.8L360 161V158.8C360 156.6 360 155.1 359.6 154.3C359.2 153.6 358.7 153.2 358 153.2C356.7 153.2 355.6 154.7 354.7 157.8L345 189L343.6 189.6V151H346.5V174.6L352 157.1C352.8 154.4 353.8 152.6 355 151.6C355.8 150.9 356.9 150.5 358.2 150.5C359.5 150.5 360.9 151.2 361.7 152.5C362.4 153.9 362.8 155.6 362.8 157.8V159.8Z"
                    fill="#FF3215" />
                <path
                    d="M394.1 188H391.1V170.4C389.7 176.2 387.3 180.8 384.1 184C381.1 187.1 377.7 188.6 374 188.6C370.3 188.6 368.2 187.4 366.2 185C364.1 182.6 363.1 179.4 363.1 175.5C363.1 169.4 365.6 163.7 370.7 158.6C376 153.2 382.2 150.4 389.2 150.4L388.5 153.2C382.2 154 376.8 156.7 372.4 161.2C368.1 165.6 366 170.3 366 175.4C366 180.5 366.8 181.2 368.3 183C369.8 184.8 371.8 185.8 374.3 185.8C379.7 185.8 383.9 182.2 387 174.9C389.8 168.5 391.1 160.7 391.1 151.8V134H394.2V188H394.1Z"
                    fill="#FF3215" />
                <path
                    d="M421.3 172.7C421.3 177.2 419.6 180.9 416.2 183.9C412.5 187.1 407.6 188.6 401.5 188.6C395.4 188.6 399.3 188.6 398.9 188.6C398.4 188.6 397.7 188.4 396.7 188.1L397.6 185.4C398 185.4 398.6 185.5 399.2 185.6C399.8 185.6 400.6 185.7 401.5 185.7C406.5 185.7 410.6 184.5 413.9 182C416.9 179.7 418.4 177.1 418.4 174C418.4 170.9 415.3 167.4 409.2 166.6C403.1 165.9 400 163.9 400 160.9C400 157.9 401.1 156.1 403.4 154.1C406.2 151.6 410.2 150.4 415.2 150.4H417.3C418 150.4 418.7 150.5 419.6 150.7L418.9 153.5C417.9 153.4 417.3 153.3 417.2 153.3C416.8 153.3 416.2 153.3 415.5 153.3C411.7 153.3 408.6 154 406.2 155.5C404 156.9 402.9 158.4 402.9 160.2C402.9 162 406 163.6 412.1 164.6C418.2 165.7 421.2 168.4 421.2 172.7H421.3Z"
                    fill="#FF3215" />
                <path d="M429.5 188H426.5V140.6H429.5V188Z" fill="#FF3215" />
                <path
                    d="M463.2 188H460.3V159.8C460.3 155.5 459.4 153.3 457.6 153.3C455.8 153.3 455.6 153.9 454.6 155.1C453.5 156.5 452.2 158.9 450.6 162.3L438.6 188.4L437.2 189.4V151H440.1V178.8L449.4 158.4C450.7 155.5 452.2 153.3 453.8 152C455.1 151 456.5 150.4 457.9 150.4C459.3 150.4 461.2 151.3 462 153.2C462.8 155.1 463.2 158 463.2 161.6V187.9V188Z"
                    fill="#FF3215" />
                <path
                    d="M487.1 151L486.1 153.9H473.9V188H471.1V153.9H467.9L468.8 151H471C471 145.8 472.6 141.4 475.7 137.9C478.8 134.4 482.5 132.7 487 132.7V135.5C483.1 135.9 480.1 137.4 477.8 140.2C475.5 143 474.1 146.6 473.8 151H487H487.1Z"
                    fill="#FF3215" />
                <path d="M490.8 146.5H487.8V133.9H490.8V146.5ZM490.8 188H487.8V151H490.8V188Z" fill="#FF3215" />
                <path
                    d="M524.8 188H521.9V159.8C521.9 155.5 521 153.3 519.2 153.3C517.4 153.3 517.2 153.9 516.2 155.1C515.1 156.5 513.8 158.9 512.2 162.3L500.2 188.4L498.8 189.4V151H501.7V178.8L511 158.4C512.3 155.5 513.8 153.3 515.4 152C516.7 151 518.1 150.4 519.5 150.4C520.9 150.4 522.8 151.3 523.6 153.2C524.4 155.1 524.8 158 524.8 161.6V187.9V188Z"
                    fill="#FF3215" />
                <path d="M535.4 146.5H532.4V133.9H535.4V146.5ZM535.4 188H532.4V151H535.4V188Z" fill="#FF3215" />
                <path d="M560.6 151L560 153.9H548.7V188H545.7V153.9H538.5L539.1 151H545.7V139.7H548.7V151H560.6Z"
                    fill="#FF3215" />
                <path
                    d="M588.8 149.6V182.2C588.8 189.9 586.8 195.8 583 199.9C579.4 203.8 574.4 205.7 568.2 205.7C562 205.7 566 205.7 565.1 205.4L565.9 202.7H568.1C573.3 202.8 577.4 201.3 580.5 198.2C584 194.7 585.8 189.7 585.8 183.3V159.8L575.6 183.2C574.7 185.4 573.6 186.8 572.2 187.7C571.2 188.4 570 188.7 568.5 188.7C567 188.7 565.4 188 564.4 186.5C563.3 184.9 562.7 182.5 562.7 179.3V151.1H565.5V179.1C565.5 181.6 565.7 183.3 566.2 184.3C566.7 185.3 567.5 185.8 568.6 185.8C569.7 185.8 570.2 185.6 570.9 185.1C571.5 184.6 572.1 183.7 572.7 182.3L587.2 150.4L588.6 149.7L588.8 149.6Z"
                    fill="#FF3215" />
                <path
                    d="M17.1 0.5C17.3 0.5 17.3 0.599999 17.3 0.799999V48.7H50.2V0.799999C50.2 0.599999 50.3 0.5 50.4 0.5H67C67.2 0.5 67.3 0.599999 67.3 0.799999V66.7C67.3 66.9 67.3 67 67 67H0.499996C0.299996 67 0.199997 67 0.199997 66.7V0.799999C0.199997 0.599999 0.299996 0.5 0.499996 0.5H17.1Z"
                    fill="#FF3215" />
                <path d="M71.2 67V0.5H88.3V66.9H71.2V67Z" fill="#FF3215" />
                <path
                    d="M109.8 0.5C110 0.5 110 0.599999 110 0.799999V48.7H142.9V0.799999C142.9 0.599999 143 0.5 143.1 0.5H159.7C159.9 0.5 160 0.599999 160 0.799999V66.7C160 66.9 160 67 159.7 67H93.2C93 67 92.9 67 92.9 66.7V0.799999C92.9 0.599999 93 0.5 93.2 0.5H109.8Z"
                    fill="#FF3215" />
                <path
                    d="M191.1 0.799999C191.1 0.599999 191.1 0.5 191.3 0.5H245.4C245.5 0.5 245.6 0.599999 245.6 0.799999V42.6C245.6 42.8 245.6 42.9 245.4 42.9H227.8V43.1C239.3 52.8 245.3 57.9 245.7 58.4V66.7C245.7 66.9 245.7 67 245.5 67H232.2C232 67 227 62.7 217.3 54.1C209.5 47.1 205.4 43.5 205.1 43.4V66.8C205.1 67 205.1 67.1 204.9 67.1H191.4C191.3 67.1 191.2 67.1 191.2 66.8V0.799999H191.1ZM205 24.8H231.7V18.7H205V24.8Z"
                    fill="#FF3215" />
                <path
                    d="M303.2 0.5C303.3 0.5 303.4 0.599999 303.4 0.799999V66.6C303.4 66.8 303.4 66.9 303.2 66.9H249.1C248.9 66.9 248.9 66.9 248.9 66.6V0.900002C248.9 0.700002 248.9 0.599998 249.1 0.599998H303.2V0.5ZM262.8 48.9H289.6V18.7H262.8V48.9Z"
                    fill="#FF3215" />
                <path
                    d="M361 0.5C361.1 0.5 361.2 0.599999 361.2 0.799999V66.7C361.2 66.9 361.2 67 361 67H306.9C306.8 67 306.7 67 306.7 66.7V0.799999C306.7 0.599999 306.7 0.5 306.9 0.5H361ZM320.5 24.8H347.3V18.7H320.5V24.8ZM320.5 48.9H347.3V42.9H320.5V48.9Z"
                    fill="#FF3215" />
                <path
                    d="M418.7 0.5C418.8 0.5 418.9 0.599999 418.9 0.799999V66.6C418.9 66.8 418.9 66.9 418.7 66.9H364.6C364.4 66.9 364.4 66.9 364.4 66.6V0.900002C364.4 0.700002 364.4 0.599998 364.6 0.599998H418.7V0.5ZM378.3 48.9H405.1V18.7H378.3V48.9Z"
                    fill="#FF3215" />
                <path
                    d="M442 19.1H422.3C422.2 19.1 422.1 19.1 422.1 18.8V0.799999C422.1 0.599999 422.1 0.5 422.3 0.5H476.4C476.5 0.5 476.6 0.599999 476.6 0.799999V18.8C476.6 19 476.6 19.1 476.4 19.1H456.6V66.7C456.6 66.9 456.6 67 456.4 67H442.2C442 67 442 67 442 66.7V19.1Z"
                    fill="#FF3215" />
                <path
                    d="M479.8 0.5V66.9H485.2L485.5 39.3C484.6 39 484 38.2 484 37.2C484 36 485 35 486.2 35C487.4 35 488.4 36 488.4 37.2C488.4 38.2 487.7 39 486.9 39.3L486.6 66.9H489.3L490.2 33.1H485.7L485.9 16.1C485 15.8 484.4 15 484.4 14C484.4 12.8 485.4 11.8 486.6 11.8C487.8 11.8 488.8 12.8 488.8 14C488.8 15 488.1 15.8 487.3 16.1L487.1 31.8H491.6L490.7 67H493.7V0.5H479.8Z"
                    fill="#FF3215" />
                <path
                    d="M497.5 0.799999C497.5 0.599999 497.5 0.5 497.7 0.5H551.8C551.9 0.5 552 0.599999 552 0.799999V18.4C552 18.6 552 18.7 551.8 18.7H511.4V48.9H551.8C551.9 48.9 552 49 552 49.2V66.8C552 67 552 67.1 551.8 67.1H497.7C497.6 67.1 497.5 67.1 497.5 66.8V0.799999Z"
                    fill="#FF3215" />
                <path
                    d="M609.6 0.499992C609.7 0.499992 609.8 0.599992 609.8 0.799992V18.4C609.8 18.6 609.8 18.7 609.6 18.7H569.2V24.6H609.6C609.7 24.6 609.8 24.7 609.8 24.9V66.7C609.8 66.9 609.8 67 609.6 67H555.5C555.3 67 555.3 67 555.3 66.7V49.1C555.3 48.9 555.3 48.8 555.5 48.8H595.9V42.8H555.5C555.3 42.8 555.3 42.8 555.3 42.5V0.699993C555.3 0.499993 555.3 0.399994 555.5 0.399994H609.6V0.499992Z"
                    fill="#FF3215" />
            </svg>
            <br>
            <p class="w-[80%] max-w-[80%]">Welcome to the UIU Robotics Club, where innovation thrives at United
                International University. We inspire passion for robotics through hands-on training, global
                competitions, and cutting-edge research. Our members excel internationally, gaining recognition in Asia
                and beyond while developing skills to shape the future of technology.</p>
            <div class="flex flex-1 self-start justify-center items-center mt-4 gap-3">
                <span>
                    <p class="text-xl font-bold text-gray-800">Explore more</p>
                </span>
                <span>
                    <a href="#"
                        class="flex justify-center items-center rounded-full bg-primary text-white font-bold text-[18px] w-[2rem] h-[2rem] cursor-pointer hover:bg-[#0E1E2D] transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <path fill="currentColor"
                                d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                        </svg>
                    </a>
                </span>
            </div>
        </div>
        <!-- Carousel Container -->
        <div class="w-full sm:w-1/2 rounded-xl overflow-hidden relative mx-auto"
            style="aspect-ratio: 5/3; max-width: 800px;">
            <div id="photo-carousel" class="relative w-full h-full">
                <div id="carousel-images" class="flex h-full transition-transform duration-500 ease-in-out"></div>
                <button id="prev-button"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/30 backdrop-blur-sm rounded-full p-2 hover:bg-white/50 transition duration-300 focus:outline-none"
                    aria-label="Previous image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="next-button"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/30 backdrop-blur-sm rounded-full p-2 hover:bg-white/50 transition duration-300 focus:outline-none"
                    aria-label="Next image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <div id="carousel-dots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                </div>
            </div>
        </div>

        <script>
            const images = [
                "assets/img/Group/1.jpg",
                "assets/img/Group/2.jpg",
                "assets/img/Group/3.jpg"
            ];

            let currentIndex = 0;

            function initializeCarousel() {
                const carouselImages = document.getElementById('carousel-images');
                const carouselDots = document.getElementById('carousel-dots');
                const prevButton = document.getElementById('prev-button');
                const nextButton = document.getElementById('next-button');

                // Populate images
                images.forEach((src, index) => {
                    const imgDiv = document.createElement('div');
                    imgDiv.className = 'w-full h-full flex-shrink-0';
                    imgDiv.innerHTML =
                        `<img src="${src}" alt="Carousel image ${index + 1}" class="w-full h-full object-cover" />`;
                    carouselImages.appendChild(imgDiv);

                    // Populate dots
                    const dot = document.createElement('button');
                    dot.className =
                        `w-3 h-3 rounded-full ${index === 0 ? 'bg-white/50 backdrop-blur-md' : 'bg-white/20 backdrop-blur-sm'} focus:outline-none`;
                    dot.setAttribute('aria-label', `Go to image ${index + 1}`);
                    dot.addEventListener('click', () => goToImage(index));
                    carouselDots.appendChild(dot);
                });

                function updateCarousel() {
                    carouselImages.style.transform = `translateX(-${currentIndex * 100}%)`;
                    const dots = carouselDots.children;
                    for (let i = 0; i < dots.length; i++) {
                        dots[i].className =
                            `w-3 h-3 rounded-full ${i === currentIndex ? 'bg-white/50 backdrop-blur-md' : 'bg-white/20 backdrop-blur-sm'} focus:outline-none`;
                    }
                }

                function goToImage(index) {
                    currentIndex = (index + images.length) % images.length;
                    updateCarousel();
                }

                prevButton.addEventListener('click', () => {
                    goToImage(currentIndex - 1);
                });

                nextButton.addEventListener('click', () => {
                    goToImage(currentIndex + 1);
                });

                document.getElementById('photo-carousel').addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') goToImage(currentIndex - 1);
                    if (e.key === 'ArrowRight') goToImage(currentIndex + 1);
                });

                updateCarousel();
            }

            window.addEventListener('load', initializeCarousel);
        </script>
    </section>
    <!-- Events -->
    <section class="w-[85%] max-w-[1440px] mx-auto mt-20 px-5">
        <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
            <span class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl text-nowrap font-semibold uppercase">
                :: Our Events
            </span>
            <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                <div class="bg-primary absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                </div>
            </div>
        </div>


        <div class="container mx-auto p-4">
            <!-- Carousel Container -->
            <div class="carousel-container relative">
                <!-- Navigation Arrows -->
                <!-- Left Arrow (hidden on mobile, shown on md and up) -->
                <button id="left-arrow"
                    class="nav-arrow nav-arrow-left hidden md:flex absolute left-0 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <!-- Inside the carousel-container -->
                <!-- Right Arrow (hidden on mobile, shown on md and up) -->
                <button id="right-arrow"
                    class="nav-arrow nav-arrow-right hidden md:flex absolute right-0 top-1/2 transform -translate-y-1/2">
                    <span class="arrow-content">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span id="more" class="ellipsis-content hidden"><svg fill="#ffffff" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 32.055 32.055" xml:space="preserve">
                            <g>
                                <path
                                    d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967
                                C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967
                                s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967
                                c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z" />
                            </g>
                        </svg></span>
                </button>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const moreSpan = document.getElementById('more');
                        const moreSvg = moreSpan.querySelector('svg');

                        moreSvg.addEventListener('click', function(event) {
                            // Prevent the click from bubbling up to parent elements if needed
                            event.stopPropagation();

                            // Check if the more span is visible
                            if (!moreSpan.classList.contains('hidden')) {
                                // Replace 'https://example.com' with your desired URL
                                window.location.href = 'https://example.com';
                                // Alternatively, use window.open('https://example.com', '_blank') to open in a new tab
                            }
                        });
                    });
                </script>

                <!-- Event Cards Container -->
                <div id="events-container" class="scroll-container space-x-4 overflow-x-auto snap-x snap-mandatory">
                    <!-- Event cards or no events message will be inserted here -->
                </div>
            </div>
        </div>

        <script defer>
            const placeholderImage = "/assets/img/svg/banner.svg";

            const staticEvents = [{
                    heading: "Majlish-e-Ifter",
                    time: "March 17, 2025",
                    location: "UIU Cafeteria",
                    image: "assets/img/Events/Iftar.jpg",
                    link: "/event/"
                },
                {
                    heading: "UIU CSE Fest",
                    time: "June 17-18, 2025",
                    location: "United International University",
                    image: "assets/img/Events/CSE_fest.jpg",
                    link: "/event/"
                },
                {
                    heading: "Rush Hour",
                    time: "December 4, 2024",
                    location: "UIU Gallery",
                    image: "assets/img/Events/Rush_hour.jpg",
                    link: "/event/"
                },
                {
                    heading: "Research 101",
                    time: "Oct 9th, 2024",
                    location: "Room 126",
                    image: "assets/img/Events/Research 101.jpg",
                    link: "/Research101/index.php"
                },
                {
                    heading: "TechTrove",
                    time: "July 6-9, 2024",
                    location: "Lobby Area",
                    image: "assets/img/Events/Techtrove.jpg",
                    link: "/event/"
                }
            ];

            function renderEvents(events) {
                const eventsContainer = document.getElementById('events-container');
                eventsContainer.innerHTML = '';

                if (events.length === 0) {
                    const noEventsMessage = document.createElement('div');
                    noEventsMessage.className = 'w-full text-center py-10';
                    noEventsMessage.innerHTML = `
                <p class="text-2xl text-orange-500">No events are happening right now</p>
            `;
                    eventsContainer.appendChild(noEventsMessage);
                } else {
                    const isMobile = window.innerWidth <= 640; // Tailwind 'sm' breakpoint
                    const eventCards = [];

                    // Create event cards
                    events.forEach(event => {
                        const eventCard = document.createElement('div');
                        eventCard.className = 'event-card rounded-lg w-full sm:w-72 inline-block snap-center';
                        eventCard.innerHTML = `
                    <img src="${event.image || placeholderImage}" alt="Event" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="event-details m-4">
                        <h2 class="text-sm sm:text-base font-bold text-gray-900">${event.heading}</h2>
                        <p class="text-xs sm:text-sm text-gray-900 mt-0.5"><strong>Date</strong><br>${event.time}</p>
                        <p class="text-xs sm:text-sm text-gray-900 mt-0.5"><strong>Location</strong><br>${event.location}</p>
                        <button onclick="window.location.href='${event.link}'" class="event-details-button bg-red-500 text-white rounded-full p-2 sm:p-3 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 sm:w-6 h-5 sm:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                `;
                        eventCards.push(eventCard);
                    });

                    if (isMobile && events.length > 1) {
                        // Add duplicate cards for infinite scrolling
                        const lastCardClone = eventCards[eventCards.length - 1].cloneNode(true);
                        const firstCardClone = eventCards[0].cloneNode(true);
                        eventsContainer.appendChild(lastCardClone); // Prepend last card
                        eventCards.forEach(card => eventsContainer.appendChild(card)); // Main cards
                        eventsContainer.appendChild(firstCardClone); // Append first card
                    } else {
                        // Non-mobile or single event: no duplicates
                        eventCards.forEach(card => eventsContainer.appendChild(card));
                    }

                    initializeCarousel();
                }
            }

            function initializeCarousel() {
                const eventsContainer = document.getElementById('events-container');
                const leftArrow = document.getElementById('left-arrow');
                const rightArrow = document.getElementById('right-arrow');
                const cardWidth = 304; // Width of each card including margin
                const isMobile = window.innerWidth <= 640;
                const numCards = staticEvents.length;
                const maxIndex = isMobile && numCards > 1 ? numCards : numCards - 1;
                let isScrolling = false;

                function updateArrows() {
                    const scrollLeft = eventsContainer.scrollLeft;
                    const maxScroll = eventsContainer.scrollWidth - eventsContainer.clientWidth;

                    if (!isMobile || numCards <= 1) {
                        // Finite scrolling for desktop or single card
                        leftArrow.style.display = scrollLeft <= 5 ? 'none' : 'block';
                        leftArrow.disabled = scrollLeft <= 5;
                        rightArrow.style.display = scrollLeft >= maxScroll - 5 ? 'none' : 'block';
                        rightArrow.disabled = scrollLeft >= maxScroll - 5;
                    } else {
                        // Infinite scrolling: arrows always visible in mobile
                        leftArrow.style.display = 'block';
                        leftArrow.disabled = false;
                        rightArrow.style.display = 'block';
                        rightArrow.disabled = false;
                    }
                }

                function scrollToIndex(index, instant = false) {
                    if (isScrolling) return;
                    isScrolling = true;

                    if (isMobile && numCards > 1) {
                        // Handle infinite scrolling
                        if (index < 0) {
                            // Jump to the real last card (before duplicate first card)
                            index = numCards - 1;
                            eventsContainer.scrollTo({
                                left: index * cardWidth,
                                behavior: 'auto'
                            });
                        } else if (index > numCards) {
                            // Jump to the real first card (after duplicate last card)
                            index = 1;
                            eventsContainer.scrollTo({
                                left: index * cardWidth,
                                behavior: 'auto'
                            });
                        }
                    } else {
                        // Clamp index for non-mobile
                        index = Math.max(0, Math.min(index, maxIndex));
                    }

                    eventsContainer.scrollTo({
                        left: index * cardWidth,
                        behavior: instant ? 'auto' : 'smooth'
                    });

                    setTimeout(() => {
                        isScrolling = false;
                        updateArrows();
                    }, instant ? 0 : 600);
                }

                function handleInfiniteScroll() {
                    if (!isMobile || numCards <= 1) return;
                    const scrollLeft = eventsContainer.scrollLeft;
                    const maxScroll = eventsContainer.scrollWidth - eventsContainer.clientWidth;

                    if (scrollLeft <= 0) {
                        // At duplicate last card: jump to real last card
                        scrollToIndex(numCards - 1, true);
                    } else if (scrollLeft >= maxScroll - 5) {
                        // At duplicate first card: jump to real first card
                        scrollToIndex(1, true);
                    }
                }

                leftArrow.addEventListener('click', () => {
                    if (leftArrow.disabled || isScrolling) return;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    scrollToIndex(currentIndex - 1);
                });

                rightArrow.addEventListener('click', () => {
                    if (rightArrow.disabled || isScrolling) return;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    scrollToIndex(currentIndex + 1);
                });

                // Handle touch scrolling
                let startX, isDragging = false;
                eventsContainer.addEventListener('touchstart', (e) => {
                    if (isScrolling) return;
                    startX = e.touches[0].clientX;
                    isDragging = true;
                });

                eventsContainer.addEventListener('touchmove', (e) => {
                    if (!isDragging || isScrolling) return;
                    const currentX = e.touches[0].clientX;
                    const diffX = startX - currentX;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    if (Math.abs(diffX) > 50) {
                        if (diffX > 0) {
                            // Swipe left: scroll to next card
                            scrollToIndex(currentIndex + 1);
                        } else if (diffX < 0) {
                            // Swipe right: scroll to previous card
                            scrollToIndex(currentIndex - 1);
                        }
                        isDragging = false;
                    }
                });

                eventsContainer.addEventListener('touchend', () => {
                    isDragging = false;
                    if (!isScrolling) handleInfiniteScroll();
                });

                // Update arrows and check for infinite scroll on scroll
                eventsContainer.addEventListener('scroll', () => {
                    if (!isScrolling) {
                        updateArrows();
                        handleInfiniteScroll();
                    }
                });

                // Initial scroll position for mobile infinite scroll
                if (isMobile && numCards > 1) {
                    scrollToIndex(1, true); // Start at first real card
                } else {
                    updateArrows();
                }
            }

            function initializeCarousel() {
                const eventsContainer = document.getElementById('events-container');
                const leftArrow = document.getElementById('left-arrow');
                const rightArrow = document.getElementById('right-arrow');
                const rightArrowContent = rightArrow.querySelector('.arrow-content');
                const rightEllipsisContent = rightArrow.querySelector('.ellipsis-content');
                const cardWidth = 304; // Width of each card including margin
                const isMobile = window.innerWidth <= 640;
                const numCards = staticEvents.length;
                const maxIndex = isMobile && numCards > 1 ? numCards : numCards - 1;
                let isScrolling = false;

                function updateArrows() {
                    const scrollLeft = eventsContainer.scrollLeft;
                    const maxScroll = eventsContainer.scrollWidth - eventsContainer.clientWidth;

                    if (!isMobile || numCards <= 1) {
                        // Finite scrolling for desktop or single card
                        leftArrow.style.display = scrollLeft <= 5 ? 'none' : 'block';
                        leftArrow.disabled = scrollLeft <= 5;

                        if (scrollLeft >= maxScroll - 5) {
                            // Show ellipsis at rightmost position
                            rightArrowContent.classList.add('hidden');
                            rightEllipsisContent.classList.remove('hidden');
                            rightArrow.disabled = false; // Allow clicking ellipsis to scroll left
                        } else {
                            // Show right arrow when not at rightmost position
                            rightArrowContent.classList.remove('hidden');
                            rightEllipsisContent.classList.add('hidden');
                            rightArrow.disabled = false;
                        }
                    } else {
                        // Infinite scrolling: arrows always visible in mobile
                        leftArrow.style.display = 'block';
                        leftArrow.disabled = false;
                        rightArrowContent.classList.remove('hidden');
                        rightEllipsisContent.classList.add('hidden');
                        rightArrow.disabled = false;
                    }
                }

                function scrollToIndex(index, instant = false) {
                    if (isScrolling) return;
                    isScrolling = true;

                    if (isMobile && numCards > 1) {
                        // Handle infinite scrolling
                        if (index < 0) {
                            index = numCards - 1;
                            eventsContainer.scrollTo({
                                left: index * cardWidth,
                                behavior: 'auto'
                            });
                        } else if (index > numCards) {
                            index = 1;
                            eventsContainer.scrollTo({
                                left: index * cardWidth,
                                behavior: 'auto'
                            });
                        }
                    } else {
                        // Clamp index for non-mobile
                        index = Math.max(0, Math.min(index, maxIndex));
                    }

                    eventsContainer.scrollTo({
                        left: index * cardWidth,
                        behavior: instant ? 'auto' : 'smooth'
                    });

                    setTimeout(() => {
                        isScrolling = false;
                        updateArrows();
                    }, instant ? 0 : 600);
                }

                function handleInfiniteScroll() {
                    if (!isMobile || numCards <= 1) return;
                    const scrollLeft = eventsContainer.scrollLeft;
                    const maxScroll = eventsContainer.scrollWidth - eventsContainer.clientWidth;

                    if (scrollLeft <= 0) {
                        scrollToIndex(numCards - 1, true);
                    } else if (scrollLeft >= maxScroll - 5) {
                        scrollToIndex(1, true);
                    }
                }

                leftArrow.addEventListener('click', () => {
                    if (leftArrow.disabled || isScrolling) return;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    scrollToIndex(currentIndex - 1);
                });

                rightArrow.addEventListener('click', () => {
                    if (rightArrow.disabled || isScrolling) return;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    if (!isMobile && rightEllipsisContent.classList.contains('hidden')) {
                        // Right arrow: scroll right
                        scrollToIndex(currentIndex + 1);
                    } else if (!isMobile) {
                        // Ellipsis: scroll left
                        scrollToIndex(currentIndex - 1);
                    } else {
                        // Mobile: always scroll right
                        scrollToIndex(currentIndex + 1);
                    }
                });

                // Handle touch scrolling
                let startX, isDragging = false;
                eventsContainer.addEventListener('touchstart', (e) => {
                    if (isScrolling) return;
                    startX = e.touches[0].clientX;
                    isDragging = true;
                });

                eventsContainer.addEventListener('touchmove', (e) => {
                    if (!isDragging || isScrolling) return;
                    const currentX = e.touches[0].clientX;
                    const diffX = startX - currentX;
                    const currentIndex = Math.round(eventsContainer.scrollLeft / cardWidth);
                    if (Math.abs(diffX) > 50) {
                        if (diffX > 0) {
                            scrollToIndex(currentIndex + 1);
                        } else if (diffX < 0) {
                            scrollToIndex(currentIndex - 1);
                        }
                        isDragging = false;
                    }
                });

                eventsContainer.addEventListener('touchend', () => {
                    isDragging = false;
                    if (!isScrolling) handleInfiniteScroll();
                });

                eventsContainer.addEventListener('scroll', () => {
                    if (!isScrolling) {
                        updateArrows();
                        handleInfiniteScroll();
                    }
                });

                if (isMobile && numCards > 1) {
                    scrollToIndex(1, true);
                } else {
                    updateArrows();
                }
            }

            window.onload = () => renderEvents(staticEvents);
        </script>
    </section>
    <!-- What we do -->
    <section class="w-[85%] max-w-[1440px] mx-auto mt-20 px-5">
        <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
            <span class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl text-nowrap font-semibold uppercase">
                :: What do we do?
            </span>
            <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                <div class="bg-primary absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                </div>
            </div>
        </div>

        <div class="flex flex-row flex-wrap gap-3 justify-center mt-10">
            <div class="flex flex-col sm:flex-row max-w-[600px] gap-8">
                <img class="mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px]"
                    src="/assets/img/svg/community.svg">

                <div class="flex flex-col">
                    <p class="text-3xl text-primary mb-2">Community</p>
                    <p class="text-md">The UIU Robotics Club creates a supportive environment by organizing programs,
                        workshops, and competitions that connect students, teachers, and employers, fostering a sense of
                        community around robotics and embedded systems. Events like INNOBOTICS-2020 and Ideastorm-2021
                        bring together multidisciplinary students, promoting collaboration and teamwork, which helps
                        members build lasting connections.</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row max-w-[600px] gap-8">
                <img class="mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px]" src="/assets/img/svg/career.svg">

                <div class="flex flex-col">
                    <p class="text-3xl text-primary mb-2">Career opportunity</p>
                    <p class="text-md">The club enhances career prospects by developing technical skills through project
                        work and providing exposure to industry connections. Achievements like the UIU Mars Rover Team's
                        first place in Asia at the University Rover Challenge 2022 showcase how members gain practical
                        experience, potentially opening doors to future employment in robotics and related fields.</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row max-w-[600px] gap-8">
                <img class="mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px]"
                    src="/assets/img/svg/team-leader.svg">

                <div class="flex flex-col">
                    <p class="text-3xl text-primary mb-2">Leadership</p>
                    <p class="text-md">Leadership is fostered by encouraging members to organize national and global
                        competitions, such as INNOBOTICS, and participate in research endeavors. These roles help
                        students build confidence and organizational skills, preparing them for leadership positions in
                        their future careers.</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row max-w-[600px] gap-8">
                <img class="mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px]" src="\assets\img\svg\manuals.png">

                <div class="flex flex-col">
                    <p class="text-3xl text-primary mb-2">Guidelines and Resources</p>
                    <p class="text-md">The club provides guidelines through training workshops, like "Electronics &
                        Basic Robotics," and resources such as the Robotics Starter Kitbox in Beginner, Standard, and
                        Advanced packages, ensuring members have structured support to start and excel in robotics
                        projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-[85%] max-w-[1440px] mx-auto mt-20 px-5">
        <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
            <span class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl text-nowrap font-semibold uppercase">
                :: Brands we work with
            </span>
            <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                <div class="bg-primary absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                </div>
            </div>
        </div>

        <div class="flex flex-row flex-wrap items-center justify-around gap-3 mt-10">
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img src="/assets/img/companies/united.png">
            </div>
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img src="/assets/img/companies/ici.png">
            </div>
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img src="/assets/img/companies/PRAN.png">
            </div>
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Government_Seal_of_Bangladesh.svg/2048px-Government_Seal_of_Bangladesh.svg.png">
            </div>
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img src="/assets/img/companies/shurokkha.png">
            </div>
            <div
                class="flex items-center justify-around mx-auto my-2 w-[98px] sm:w-[112px] h-[98px] sm:h-[112px] rounded-xl max-w-[200px]">
                <img src="/assets/img/companies/startech.png">
            </div>
        </div>
    </section>



    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>