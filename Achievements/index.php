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

    <div
        class="flex items-center justify-start pr-15 pl-15 pt-15 gap-4 text-primary sm:mt-5 mt-[160px] sm:pt-5 pt-[10px]">
        <span
            class="font-display text-2xl sm:text-4xl md:text-2xl lg:text-4xl font-semibold uppercase whitespace-nowrap">
            Our Achievements
        </span>

        <span class="inline-block px-2.5 py-1 text-xs font-semibold text-white bg-[#ff3215] rounded-full">
            32
        </span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 px-4 sm:px-6 md:px-10 lg:px-25 pt-10"
        id="achievementsContainer">
        <!-- Cards will be dynamically inserted here -->
    </div>

    <script>
        // Data array for achievements
        const achievements = [{
                team: "UIU Mars Rover Team",
                year: "2022",
                event: "University Rover Challenge",
                achievement: "Top 36 (Running)",
                members: "Not specified",
                image: "\\assets\\img\\Achievements\\Rover22.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2021",
                event: "EEE Day",
                achievement: "2nd Runners-Up",
                members: "M. Abdullah Khan",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "EEE Award",
                achievement: "Honor",
                members: "Mahadi Hassan Anik, Md Rashidul Islam Rasel, Md. Mizanur Rahman, Sadman Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Tech Quest",
                achievement: "Champion",
                members: "Md Ifraham Iqbal Aqib, Md Rashidul Islam Rasel, Najmuss Sakib, Nehal Bhuiyan",
                image: "\\assets\\img\\Achievements\\Robofest Ica.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Robolution",
                achievement: "1st Runners-Up",
                members: "Md Ifraham Iqbal Aqib, Md Rashidul Islam Rasel, Mohammad Toriqul Islam, Najmuss Sakib",
                image: "/assets/img/Achievements/Robolution.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Google CodeU",
                achievement: "Selected for Jury",
                members: "Faizah Farzana Anika, Md Abdullah Al Rifat",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "International Robo Fest",
                achievement: "Champion",
                members: "Furkan Alahi, Md Ifraham Iqbal Aqib, Md Rashidul Islam Rasel, Najmuss Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Student to Start-Up",
                achievement: "Top 10",
                members: "Mohammad Toriqul Islam, Nehal Bhuiyan, Sadaf Meem",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Entrepreneurship 360",
                achievement: "1st Runners-Up",
                members: "Md Abdullah Al Fahad, Md Mainul Islam, Proshanta Kumer Das",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Hult Prize",
                achievement: "2nd Runner-Up",
                members: "Md Abdullah Al Fahad, Md Mainul Islam, Proshanta Kumer Das",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "CoronaThon-19",
                achievement: "Runners-Up",
                members: "Anika Tahsin, Arifa Akter, Faizah Farzana Anika, Md Abdullah Al Fahad, Md Abdullah Al Rifat, Proshanta Kumer Das",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2019",
                event: "Robo Carnival",
                achievement: "3rd Runner-Up",
                members: "Dip Chakraborty, S.K.F Alam Shovon, Shakik Mahmud",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2018",
                event: "Ureckon(India)",
                achievement: "Champion",
                members: "Md Ifraham Iqbal Aqib, Md Rashidul Islam Rasel, Najmuss Sakib, Priyobrota Nath",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2018",
                event: "Ureckon(India)",
                achievement: "Runners Up",
                members: "Furkan Alahi, Mahadi Hassan Anik, Md Ifraham Iqbal Aqib, Mohammad Toriqul Islam",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2018",
                event: "DUIT FEST",
                achievement: "2nd Runners-Up",
                members: "Hamudi Hasan Sonet, Irin Monwar, Md Abdullah Al Rifat, Neaz Ahmed",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2018",
                event: "DUET Techfest",
                achievement: "1st Runners-Up",
                members: "Md Shahadat Hossen, Nokibul Alam, Proshanta Kumer Das",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Mars Rover Team",
                year: "2017",
                event: "University Rover Challenge",
                achievement: "Top 36",
                members: "Not specified",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "BRACathon II",
                achievement: "Champion",
                members: "Amit Ghosh, Chowdhury Rezaur Rahman Shahed, Hamudi Hasan Sonet, Mahabub Hasan",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "National Women’s Hackathon",
                achievement: "Champion",
                members: "Faizah Farzana Anika, Fariha Afrin, Maisha Farzana Swarna, Mashruba Rahman Mohona",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "National Women’s Hackathon",
                achievement: "Runners Up",
                members: "Ishrat Jahan, Nadia Sultana, Rubina Parvin Sharna, Rumman Mosharifa",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "MCCI Agragami",
                achievement: "Champion",
                members: "Sadaf Meem",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "MCCI Agragami",
                achievement: "Runners Up",
                members: "Faizah Farzana Anika",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "Tech For Peace",
                achievement: "Champion",
                members: "Amit Ghosh, Chowdhury Rezaur Rahman Shahed, Faysal Mahmud Abid, Hamudi Hasan Sonet, Md Tafsir Hossain",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "Techfest Bangladesh Round & NRF",
                achievement: "Champion",
                members: "Julker Nien Akib, Md Tafsir Hossain, Mirza Salem, Sadman Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "APICTA Award",
                achievement: "MERIT Award",
                members: "Hamudi Hasan Sonet",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "NRF",
                achievement: "Champion",
                members: "Ambia Md Hossain, Jahir Ahmed, Shadman Shadab, Tawab Alam",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "NRF",
                achievement: "Runners Up",
                members: "Furkan Alahi, Md Ifraham Iqbal Aqib, Md Rashidul Islam Rasel, Mohammad Toriqul Islam, Najmuss Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2017",
                event: "EEE Day",
                achievement: "Runners-Up",
                members: "Md. Mizanur Rahman, Sadman Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2016",
                event: "TechQuest",
                achievement: "Champion",
                members: "Md Ifraham Iqbal Aqib, Md. Mizanur Rahman, Moshiur Rahman Sohan",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2016",
                event: "TechQuest",
                achievement: "1st Runners Up",
                members: "Md Ifraham Iqbal Aqib, Md. Mizanur Rahman, Moshiur Rahman Sohan",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2016",
                event: "UIU Soccer Bot Championship",
                achievement: "Champion",
                members: "Md Ifraham Iqbal Aqib, Md. Mizanur Rahman, Moshiur Rahman Sohan, Sadaf Meem, Shariful Alam Patwary",
                image: "/assets/img/misc/unavailable.jpg"
            },
            {
                team: "UIU Robotics Club",
                year: "2016",
                event: "UIU Soccer Bot Championship",
                achievement: "Runners Up",
                members: "Md Rashidul Islam Rasel, Mohammad Toriqul Islam, Najmuss Sakib",
                image: "/assets/img/misc/unavailable.jpg"
            }
        ];

        // Function to render cards dynamically
        function renderAchievements() {
            const container = document.getElementById('achievementsContainer');
            container.innerHTML = ''; // Clear existing content

            achievements.forEach(achievement => {
                const card = document.createElement('div');
                card.className = 'nut_box_4 max-w-sm mx-auto rounded-2xl shadow-md bg-white';
                card.innerHTML = `
                    <div class="w-full aspect-[4/3] overflow-hidden rounded-t-xl">
                        <img src="${achievement.image}" alt="Team Member"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                    </div>
                    <div class="mb-8">
                        <div class="flex items-center justify-between p-3">
                            <h1 class="text-xl font-bold text-gray-800">${achievement.team}</h1>
                            <span class="inline-block px-2 py-0.5 text-xs font-semibold text-white bg-[#ff3215] rounded-full">
                                ${achievement.year}
                            </span>
                        </div>
                        <h3 class="text-base font-semibold text-gray-700 mb-1 pl-4">${achievement.event}</h3>
                        <h3 class="text-sm font-medium text-[#ff3215] mb-1 pl-4">${achievement.achievement}</h3>
                        <p class="text-sm text-gray-600 pl-4 pr-4">Team members: ${achievement.members}</p>
                    </div>
                `;
                container.appendChild(card);
            });
        }

        // Call the function to render cards on page load
        document.addEventListener('DOMContentLoaded', renderAchievements);
    </script>




    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>