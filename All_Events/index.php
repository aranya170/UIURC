<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
    @media (max-width: 1024px) {

        #upcoming-events-container,
        #our-events-container {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    @media (max-width: 640px) {

        #upcoming-events-container,
        #our-events-container {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .event-card {
            min-width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .event-details {
            padding: 0.75rem;
        }

        .event-details h2 {
            font-size: clamp(0.875rem, 4vw, 1rem);
        }

        .event-details p {
            font-size: clamp(0.75rem, 3.5vw, 0.875rem);
        }

        .font-display {
            font-size: clamp(1.25rem, 5vw, 1.5rem);
        }

        .w-\[95\%\] {
            width: 100%;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .mt-20 {
            margin-top: 2rem;
        }

        .event-card img {
            height: 12rem;
            /* Adjusted for mobile while maintaining aspect ratio */
        }
    }

    /* Ensure images are responsive while maintaining aspect ratio */
    .event-card img {
        max-width: 100%;
        height: 16rem;
        /* Default height for larger screens */
        object-fit: cover;
        object-position: center;
    }

    /* Clickable card styles */
    .event-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .event-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .event-card:focus {
        outline: 2px solid #ef4444;
        /* red-500 for Our Events */
        outline-offset: 2px;
    }

    #upcoming-events-container .event-card:focus {
        outline: 2px solid #3b82f6;
        /* blue-500 for Upcoming Events */
    }
    </style>
</head>

<body>
    <?php include ABSPATH . '_includes/header.php'; ?>

    <!-- Upcoming Events Section -->
    <section class="w-[95%] max-w-[1600px] mx-auto mt-20 px-4">
        <div class="flex items-center justify-start gap-4 text-primary">
            <span
                class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl font-semibold uppercase whitespace-nowrap p-4">
                Upcoming Events
            </span>
        </div>
        <div class="container mx-auto p-4">
            <div id="upcoming-events-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Event cards or no events message will be inserted here -->
            </div>
        </div>
    </section>

    <!-- Our Events Section -->
    <section class="w-[95%] max-w-[1600px] mx-auto mt-20 px-4">
        <div class="flex items-center justify-start gap-4 text-primary">
            <span
                class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl font-semibold uppercase whitespace-nowrap p-4">
                Our Events
            </span>
        </div>
        <div class="container mx-auto p-4">
            <div id="our-events-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Event cards or no events message will be inserted here -->
            </div>
        </div>
    </section>

    <script defer>
    const placeholderImage = "/assets/img/svg/banner.svg";

    const staticUpcomingEvents = [{
        heading: "Research 101",
        time: "Oct 9th, 2024",
        location: "Room 126",
        details: "Join us for Research 101, a comprehensive workshop designed to introduce students to the fundamentals of research methodologies, data analysis techniques, and effective presentation skills, empowering them to excel in their academic pursuits.",
        image: "https://scontent.fdac11-1.fna.fbcdn.net/v/t39.30808-6/484729646_677325414961168_8702768972533058128_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeHJKrRBMaIfReqk84C8pOPJguQ4XsOdQheC5Dhew51CF54U1bHqSoSu8RmZVsUFUcHS7KSz2Ao01gEzi_RF9v8i&_nc_ohc=KkK-dZsPvJEQ7kNvwEX3RC3&_nc_oc=AdlWZC4OS1wd1B3E0l-YujASqMk_fgmvCBZT4eXPm3lka85FBJIO5-SaB4TtmA-x0Gk&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-1.fna&_nc_gid=mTF9WK95qAjSFqKK4I97JA&oh=00_AfJR44Ts7-_v2cLhJjMcfWsQaAid4XJ9g8_nlXOI7mNEfg&oe=68363DAC",
        link: "/event/"
    }];

    const staticOurEvents = [{
            heading: "Majlish-e-Ifter",
            time: "March 17, 2025",
            location: "UIU Cafeteria",
            details: "The UIU Robotics Club cordially invites you to Majlish-e-Iftar, a special evening of togetherness, reflection, and celebration of the holy month of Ramadan! 🕌✨",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/490027735_697422702951439_4002414821349991261_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeFqXUPVyN0AqEtR3CBy1sbF2Ne4Cmso4frY17gKayjh-n6_c_hwPgoaW01JbkhLp1XUuw6eVAU5f9Vx5FPI75RU&_nc_ohc=acWyJljVp0MQ7kNvwF0j57L&_nc_oc=Adme6ovXR1TBFUimlKaxSHIuWyFQVIkwvtbzT6lvedhrVqRKbHfR8wEHlLrklWcS9i0&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=31XN1OvO91nZvlHhGr47KQ&oh=00_AfJhQ1djo6hpR3VxPCbiyQy5znLbYrfpP_29cmPjlunkuw&oe=68364C8A",
            link: "/event/"
        },
        {
            heading: "UIU CSE Fest",
            time: "June 17-18, 2025",
            location: "United International University",
            details: "Join us for the UIU CSE Fest, a two-day celebration of technology and innovation, featuring workshops, competitions, and networking opportunities with industry leaders and fellow tech enthusiasts.",
            image: "https://scontent.fdac11-1.fna.fbcdn.net/v/t39.30808-6/471726729_122110719038647360_4982353136851016130_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=108&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeELKWaNMVNbeG5P6edUQHy5ItpShxwbCq4i2lKHHBsKrhIZJoUNJXITXqeSvz3bYSAMlbCnwMHsuaDnfs_3ga87&_nc_ohc=tPM8gVwgqS8Q7kNvwEIaVMj&_nc_oc=AdnNiFqtn69CHc_qDZKAHAhZn-tqYauSsWqWNHM_KWeqTRy_rHeUAiI4wdssa__5Bt0&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-1.fna&_nc_gid=724xWw4HD4MwC0ichkgZTw&oh=00_AfIsrwQ8u8I2i9GbAozA37nIG3cdoNA58jh8cNUxQ2MEhA&oe=68363D08",
            link: "/event/"
        },
        {
            heading: "Rush Hour",
            time: "December 4, 2024",
            location: "UIU Gallery",
            details: "Join us for Rush Hour, an exciting event filled with tech talks, workshops, and networking opportunities, designed to inspire and empower the next generation of innovators and leaders in technology.",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/484381367_677849471575429_2882193511448082183_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeGog9IgGSrIF7oXp1xI1K9_6Gb3YOBnNbHoZvdg4Gc1sRlqc_XI4awDzQvEeu0Fg2z7YcXjhDvzOUEr9UZ3pzBw&_nc_ohc=83EiaYVXHDEQ7kNvwE3ezyQ&_nc_oc=AdmyxAZsAkGz46kzXS4ogMRGH-TRk-5YkLoANglk5zUgJ_o5W2yM-PL0vug7PqCpQEY&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=gStIfFzgyPb_Ruyl9h00-g&oh=00_AfIGOPJBrE3p2kZEKq6xFN7HZpfbFB6lr1iqopI7ODuKfg&oe=68362F25",
            link: "/event/"
        },
        {
            heading: "Research 101",
            time: "Oct 9th, 2024",
            location: "Room 126",
            details: "Join us for Research 101, a comprehensive workshop designed to introduce students to the fundamentals of research methodologies, data analysis techniques, and effective presentation skills, empowering them to excel in their academic pursuits.",
            image: "https://scontent.fdac11-1.fna.fbcdn.net/v/t39.30808-6/484729646_677325414961168_8702768972533058128_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeHJKrRBMaIfReqk84C8pOPJguQ4XsOdQheC5Dhew51CF54U1bHqSoSu8RmZVsUFUcHS7KSz2Ao01gEzi_RF9v8i&_nc_ohc=KkK-dZsPvJEQ7kNvwEX3RC3&_nc_oc=AdlWZC4OS1wd1B3E0l-YujASqMk_fgmvCBZT4eXPm3lka85FBJIO5-SaB4TtmA-x0Gk&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-1.fna&_nc_gid=mTF9WK95qAjSFqKK4I97JA&oh=00_AfJR44Ts7-_v2cLhJjMcfWsQaAid4XJ9g8_nlXOI7mNEfg&oe=68363DAC",
            link: "/event/"
        },
        {
            heading: "TechTrove",
            time: "July 6-9, 2024",
            location: "Lobby Area",
            details: "In today's fast-paced world, robotics is revolutionizing industries and shaping our future. Whether it's healthcare, manufacturing, or everyday life, understanding robotics is essential for staying ahead. Robotics equips you with problem-solving skills, creativity, and technical expertise.",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/482236483_675991651761211_3789288042738428016_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=106&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeEU77w3PcRPTJgNuoJgcloGrunoFDchk72u6egUNyGTvSPxrzCbyNRfqPSZZOrjQNsjIspjqhP8oSBdPU_kSYiL&_nc_ohc=0Zdb6k1DJjQQ7kNvwGAFs6L&_nc_oc=AdnXq_aUoSl3vlwqUr4EAyb4O7zD4PS7AtgxDoullUmWplsF88Dfg1-Ho9Oj0Fw1mPI&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=LnYFo_S_u4ySAYBelu5hbQ&oh=00_AfKcrVdhxZK8wHOGDoPQu2BHnNDiS7EJUf1Za829vV8zOQ&oe=68361B46",
            link: "/event/"
        }
    ];

    function renderUpcomingEvents(events) {
        const eventsContainer = document.getElementById('upcoming-events-container');
        eventsContainer.innerHTML = '';

        if (events.length === 0) {
            const noEventsMessage = document.createElement('div');
            noEventsMessage.className = 'col-span-full text-center py-10';
            noEventsMessage.innerHTML = `
            <p class="text-xl sm:text-2xl text-orange-500">No upcoming events are happening right now</p>
        `;
            eventsContainer.appendChild(noEventsMessage);
        } else {
            events.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className =
                    'event-card rounded-xl bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-300 shadow-lg cursor-pointer hover:shadow-xl transition-shadow duration-200';
                eventCard.tabIndex = 0; // Make card focusable for accessibility
                eventCard.innerHTML = `
                <img src="${event.image || placeholderImage}" alt="${event.heading}" class="w-full h-64 object-cover rounded-t-xl border-b border-blue-200">
                <div class="event-details p-6 sm:p-4 flex flex-col gap-4">
                    <h2 class="text-lg sm:text-xl font-extrabold text-gray-900">${event.heading}</h2>
                    <div>
                        <p class="text-sm sm:text-base text-gray-800"><strong>Time:</strong> ${event.time}</p>
                        <p class="text-sm sm:text-base text-gray-800 mt-1"><strong>Location:</strong> ${event.location}</p>
                    </div>
                    <p class="text-sm sm:text-base text-gray-800 font-semibold line-clamp-3">${event.details}...</p>
                </div>
            `;
                // Click event for navigation
                eventCard.addEventListener('click', () => {
                    window.location.href = event.link;
                });
                // Keyboard event for accessibility (e.g., Enter or Space key)
                eventCard.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        window.location.href = event.link;
                    }
                });
                eventsContainer.appendChild(eventCard);
            });
        }
    }

    function renderOurEvents(events) {
        const eventsContainer = document.getElementById('our-events-container');
        eventsContainer.innerHTML = '';

        if (events.length === 0) {
            const noEventsMessage = document.createElement('div');
            noEventsMessage.className = 'col-span-full text-center py-10';
            noEventsMessage.innerHTML = `
            <p class="text-xl sm:text-2xl text-orange-500">No events are happening right now</p>
        `;
            eventsContainer.appendChild(noEventsMessage);
        } else {
            events.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className =
                    'event-card rounded-xl bg-gray-200 border border-gray-300 shadow-md cursor-pointer hover:shadow-xl transition-shadow duration-200';
                eventCard.tabIndex = 0; // Make card focusable for accessibility
                eventCard.innerHTML = `
                <img src="${event.image || placeholderImage}" alt="${event.heading}" class="w-full h-64 object-cover rounded-t-xl border-b border-gray-200">
                <div class="event-details p-5 sm:p-4 flex flex-col gap-4">
                    <h2 class="text-base sm:text-lg font-bold text-gray-900">${event.heading}</h2>
                    <div>
                        <p class="text-sm sm:text-base text-gray-900"><strong>Time:</strong> ${event.time}</p>
                        <p class="text-sm sm:text-base text-gray-900 mt-1"><strong>Location:</strong> ${event.location}</p>
                    </div>
                    <p class="text-sm sm:text-base text-gray-900 font-semibold line-clamp-3">${event.details}...</p>
                </div>
            `;
                // Click event for navigation
                eventCard.addEventListener('click', () => {
                    window.location.href = event.link;
                });
                // Keyboard event for accessibility (e.g., Enter or Space key)
                eventCard.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        window.location.href = event.link;
                    }
                });
                eventsContainer.appendChild(eventCard);
            });
        }
    }

    window.onload = () => {
        renderUpcomingEvents(staticUpcomingEvents);
        renderOurEvents(staticOurEvents);
    };
    </script>
    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>