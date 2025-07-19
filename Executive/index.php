<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.6s ease-out forwards;
    }

    .timeline-dot {
        transition: all 0.3s ease;
    }

    .timeline-dot:hover {
        transform: scale(1.2);
        background-color: #3b82f6;
        box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    body {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .executive-img {
        border: 2px solid #e5e7eb;
    }

    .timeline-container {
        position: relative;
        width: 100%;
    }

    .timeline-line {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 24%;
        width: 2px;
        background: linear-gradient(to bottom, #3b82f6, #93c5fd);
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        width: 100%;
        padding: 10px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .timeline-year {
        transition: all 0.3s ease;
        padding: 8px 16px;
        border-radius: 20px;
    }

    .timeline-year:hover,
    .timeline-year.active {
        background-color: #dbeafe;
        color: #1e40af;
    }
    </style>
</head>

<body class="font-sans min-h-screen flex flex-col">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <div class="w-[85%] max-w-[1440px] mx-auto mt-20 flex flex-row flex-1 w-full max-w-7xl mx-auto p-6">
        <aside class="w-1/4 p-4 flex flex-col items-center">
            <h2 class="text-xl font-semibold text-gray-700 mb-6 animate-fadeIn">Timeline</h2>
            <div class="timeline-container" id="timeline">
                <div class="timeline-line"></div>
            </div>
        </aside>
        <main class="w-3/4 p-6" id="executive-panel">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Executive Panel</h2>
            <div id="executive-grid"></div>
            <h2 class="text-2xl font-bold text-gray-800 mt-8 mb-6">Supervising Faculty</h2>
            <div id="supervisor-grid"></div>
        </main>
    </div>

    <script>
    const executives = {
        "2023-2024": {
            "President": {
                name: "Junaed Ahmed Tanim",
                img: "https://via.placeholder.com/200x150?text=John+Doe",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/johndoe"
            },
            "Vice President": {
                name: "Sarah Connor",
                img: "https://via.placeholder.com/200x150?text=Sarah+Connor",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/sarahconnor"
            },
            "Secretary": {
                name: "Jane Smith",
                img: "https://via.placeholder.com/200x150?text=Jane+Smith",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/janesmith"
            },
            "President of A.W.S.": {
                name: "Alice Johnson",
                img: "https://via.placeholder.com/200x150?text=Alice+Johnson",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/alicejohnson"
            },
            "Secretary of A.W.S.": {
                name: "Bob Brown",
                img: "https://via.placeholder.com/200x150?text=Bob+Brown",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/bobbrown"
            },
            "Treasurer": {
                name: "Emma Wilson",
                img: "https://via.placeholder.com/200x150?text=Emma+Wilson",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/emmawilson"
            },
            "Event Coordinator": {
                name: "Michael Lee",
                img: "https://via.placeholder.com/200x150?text=Michael+Lee",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/michaellee"
            },
            "Public Relations Officer": {
                name: "Rachel Green",
                img: "https://via.placeholder.com/200x150?text=Rachel+Green",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/rachelgreen"
            },
            "Technical Lead": {
                name: "Ross Geller",
                img: "https://via.placeholder.com/200x150?text=Ross+Geller",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/rossgeller"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        },
        "2022-2023": {
            "President": {
                name: "Liam Taylor",
                img: "https://via.placeholder.com/200x150?text=Liam+Taylor",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/liamtaylor"
            },
            "Secretary": {
                name: "Olivia White",
                img: "https://via.placeholder.com/200x150?text=Olivia+White",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/oliviawhite"
            },
            "President of A.W.S.": {
                name: "Noah Clark",
                img: "https://via.placeholder.com/200x150?text=Noah+Clark",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/noahclark"
            },
            "Secretary of A.W.S.": {
                name: "Sophia Lewis",
                img: "https://via.placeholder.com/200x150?text=Sophia+Lewis",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/sophialewis"
            },
            "Treasurer": {
                name: "David King",
                img: "https://via.placeholder.com/200x150?text=David+King",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/davidking"
            },
            "Event Coordinator": {
                name: "Ella Scott",
                img: "https://via.placeholder.com/200x150?text=Ella+Scott",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/ellascott"
            },
            "Public Relations Officer": {
                name: "Monica Bing",
                img: "https://via.placeholder.com/200x150?text=Monica+Bing",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/monicabing"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        },
        "2021-2022": {
            "President": {
                name: "William Brown",
                img: "https://via.placeholder.com/200x150?text=William+Brown",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/williambrown"
            },
            "Secretary": {
                name: "Isabella Garcia",
                img: "https://via.placeholder.com/200x150?text=Isabella+Garcia",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/isabellagarcia"
            },
            "President of A.W.S.": {
                name: "Lucas Moore",
                img: "https://via.placeholder.com/200x150?text=Lucas+Moore",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/lucasmoore"
            },
            "Secretary of A.W.S.": {
                name: "Charlotte Taylor",
                img: "https://via.placeholder.com/200x150?text=Charlotte+Taylor",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/charlottetaylor"
            },
            "Treasurer": {
                name: "Oliver Harris",
                img: "https://via.placeholder.com/200x150?text=Oliver+Harris",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/oliverharris"
            },
            "Event Coordinator": {
                name: "Lily Walker",
                img: "https://via.placeholder.com/200x150?text=Lily+Walker",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/lilywalker"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        },
        "2020-2021": {
            "President": {
                name: "Henry Davis",
                img: "https://via.placeholder.com/200x150?text=Henry+Davis",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/henrydavis"
            },
            "Secretary": {
                name: "Amelia Wilson",
                img: "https://via.placeholder.com/200x150?text=Amelia+Wilson",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/ameliawilson"
            },
            "President of A.W.S.": {
                name: "Mason Lee",
                img: "https://via.placeholder.com/200x150?text=Mason+Lee",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/masonlee"
            },
            "Secretary of A.W.S.": {
                name: "Harper Johnson",
                img: "https://via.placeholder.com/200x150?text=Harper+Johnson",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/harperjohnson"
            },
            "Treasurer": {
                name: "Jack Turner",
                img: "https://via.placeholder.com/200x150?text=Jack+Turner",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/jackturner"
            },
            "Event Coordinator": {
                name: "Grace Adams",
                img: "https://via.placeholder.com/200x150?text=Grace+Adams",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/graceadams"
            },
            "Public Relations Officer": {
                name: "Phoebe Buffay",
                img: "https://via.placeholder.com/200x150?text=Phoebe+Buffay",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/phoebebuffay"
            },
            "Technical Lead": {
                name: "Chandler Bing",
                img: "https://via.placeholder.com/200x150?text=Chandler+Bing",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/chandlerbing"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        },
        "2019-2020": {
            "President": {
                name: "Ethan Young",
                img: "https://via.placeholder.com/200x150?text=Ethan+Young",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/ethanyoung"
            },
            "Secretary": {
                name: "Ava Martinez",
                img: "https://via.placeholder.com/200x150?text=Ava+Martinez",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/avamartinez"
            },
            "President of A.W.S.": {
                name: "Logan Harris",
                img: "https://via.placeholder.com/200x150?text=Logan+Harris",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/loganharris"
            },
            "Secretary of A.W.S.": {
                name: "Mia Walker",
                img: "https://via.placeholder.com/200x150?text=Mia+Walker",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/miawalker"
            },
            "Treasurer": {
                name: "Daniel Perez",
                img: "https://via.placeholder.com/200x150?text=Daniel+Perez",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/danielperez"
            },
            "Event Coordinator": {
                name: "Chloe Allen",
                img: "https://via.placeholder.com/200x150?text=Chloe+Allen",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/chloeallen"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        },
        "2018-2019": {
            "President": {
                name: "James Carter",
                img: "https://via.placeholder.com/200x150?text=James+Carter",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/jamescarter"
            },
            "Secretary": {
                name: "Emily Davis",
                img: "https://via.placeholder.com/200x150?text=Emily+Davis",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/emilydavis"
            },
            "President of A.W.S.": {
                name: "Benjamin Clark",
                img: "https://via.placeholder.com/200x150?text=Benjamin+Clark",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/benjaminclark"
            },
            "Secretary of A.W.S.": {
                name: "Sophie Brown",
                img: "https://via.placeholder.com/200x150?text=Sophie+Brown",
                dept: "Department of A.W.S.",
                link: "https://linkedin.com/in/sophiebrown"
            },
            "Treasurer": {
                name: "Samuel Wright",
                img: "https://via.placeholder.com/200x150?text=Samuel+Wright",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/samuelwright"
            },
            "Event Coordinator": {
                name: "Abigail King",
                img: "https://via.placeholder.com/200x150?text=Abigail+King",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/abigailking"
            },
            "Public Relations Officer": {
                name: "Joey Tribbiani",
                img: "https://via.placeholder.com/200x150?text=Joey+Tribbiani",
                dept: "Department of CSE",
                link: "https://linkedin.com/in/joeytribbiani"
            },
            "Supervisors": [{
                    name: "Akib Zaman",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/akibzaman"
                },
                {
                    name: "Md Abid Hossain",
                    role: "Faculty Advisor",
                    dept: "Department of CSE",
                    link: "https://linkedin.com/in/mdabidhossain"
                }
            ]
        }
    };

    let selectedYear = "2023-2024";

    function renderTimeline() {
        const timeline = document.getElementById('timeline');
        timeline.innerHTML = '<div class="timeline-line"></div>';
        Object.keys(executives).forEach((year, index) => {
            const item = document.createElement('div');
            item.className = 'timeline-item animate-fadeIn';
            item.style.animationDelay = `${index * 0.1}s`;
            const button = document.createElement('button');
            button.className =
                `timeline-dot w-5 h-5 rounded-full ${selectedYear === year ? 'bg-blue-500' : 'bg-gray-300'}`;
            button.onclick = () => handleYearClick(year);
            const p = document.createElement('p');
            p.className =
                `timeline-year text-sm font-medium ${selectedYear === year ? 'text-blue-600 active' : 'text-gray-500'}`;
            p.textContent = year;
            item.appendChild(button);
            item.appendChild(p);
            timeline.appendChild(item);
        });
    }

    function renderExecutives() {
        const executiveGrid = document.getElementById('executive-grid');
        const supervisorGrid = document.getElementById('supervisor-grid');
        executiveGrid.innerHTML = '';
        supervisorGrid.innerHTML = '';

        // Render Executive Members
        const execGrid = document.createElement('div');
        execGrid.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6';
        Object.entries(executives[selectedYear]).forEach(([role, data], index) => {
            if (role !== "Supervisors") {
                const card = document.createElement('a');
                card.href = data.link;
                card.target = '_blank';
                card.className =
                    'bg-white rounded-lg p-5 flex flex-col items-center card-hover animate-fadeIn border border-gray-100';
                card.style.animationDelay = `${index * 0.1}s`;
                const img = document.createElement('img');
                img.src = data.img;
                img.alt = data.name;
                img.className = 'w-48 h-64 rounded-lg object-cover mb-3 executive-img';
                const name = document.createElement('h3');
                name.className = 'text-lg font-semibold text-gray-800 text-center';
                name.textContent = data.name;
                const roleP = document.createElement('p');
                roleP.className = 'text-gray-600 text-sm text-center';
                roleP.textContent = role;
                const dept = document.createElement('p');
                dept.className = 'text-gray-400 text-xs text-center mt-1';
                dept.textContent = data.dept;
                card.appendChild(img);
                card.appendChild(name);
                card.appendChild(roleP);
                card.appendChild(dept);
                execGrid.appendChild(card);
            }
        });
        executiveGrid.appendChild(execGrid);

        // Render Supervisors
        const supGrid = document.createElement('div');
        supGrid.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6';
        executives[selectedYear].Supervisors.forEach((supervisor, index) => {
            const card = document.createElement('a');
            card.href = supervisor.link;
            card.target = '_blank';
            card.className =
                'bg-white rounded-lg p-5 flex flex-col items-center card-hover animate-fadeIn border border-gray-100';
            card.style.animationDelay = `${(index + Object.keys(executives[selectedYear]).length - 1) * 0.1}s`;
            const img = document.createElement('img');
            img.src = "https://via.placeholder.com/200x150?text=" + supervisor.name.replace(" ", "+");
            img.alt = supervisor.name;
            img.className = 'w-48 h-36 rounded-lg object-cover mb-3 executive-img';
            const name = document.createElement('h3');
            name.className = 'text-lg font-semibold text-gray-800 text-center';
            name.textContent = supervisor.name;
            const roleP = document.createElement('p');
            roleP.className = 'text-gray-600 text-sm text-center';
            roleP.textContent = supervisor.role;
            const dept = document.createElement('p');
            dept.className = 'text-gray-400 text-xs text-center mt-1';
            dept.textContent = supervisor.dept;
            card.appendChild(img);
            card.appendChild(name);
            card.appendChild(roleP);
            card.appendChild(dept);
            supGrid.appendChild(card);
        });
        supervisorGrid.appendChild(supGrid);
    }

    function handleYearClick(year) {
        selectedYear = year;
        renderTimeline();
        renderExecutives();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderTimeline();
        renderExecutives();
    });
    </script>
    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>