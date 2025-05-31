<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIU Robotics Club - Executive Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out forwards;
    }

    .timeline-dot {
        transition: all 0.3s ease;
    }

    .timeline-dot:hover {
        transform: scale(1.2);
        background-color: #2563eb;
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: scale(1.05);
    }
    </style>
</head>

<body class="bg-gray-100 font-sans min-h-screen">
    <div class="flex flex-row w-full">
        <aside class="w-1/4 p-6">
            <h1 class="text-4xl font-bold text-gray-900 mb-8 animate-fadeIn">Meet the Executives</h1>
            <div class="relative flex flex-col items-start">
                <div class="absolute h-full w-1 bg-gray-300 left-1/2 transform -translate-x-1/2"></div>
                <div class="flex flex-col space-y-6" id="timeline">
                    <!-- Timeline dots will be populated by JS -->
                </div>
            </div>
        </aside>
        <main class="w-3/4 p-6" id="executive-panel">
            <!-- Executive cards will be populated by JS -->
        </main>
    </div>

    <script>
    const executives = {
        "2023-2024": {
            "President": {
                name: "John Doe",
                img: "https://via.placeholder.com/150?text=John+Doe",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Jane Smith",
                img: "https://via.placeholder.com/150?text=Jane+Smith",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Alice Johnson",
                img: "https://via.placeholder.com/150?text=Alice+Johnson",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Bob Brown",
                img: "https://via.placeholder.com/150?text=Bob+Brown",
                dept: "Department of A.W.S."
            }
        },
        "2022-2023": {
            "President": {
                name: "Liam Taylor",
                img: "https://via.placeholder.com/150?text=Liam+Taylor",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Olivia White",
                img: "https://via.placeholder.com/150?text=Olivia+White",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Noah Clark",
                img: "https://via.placeholder.com/150?text=Noah+Clark",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Sophia Lewis",
                img: "https://via.placeholder.com/150?text=Sophia+Lewis",
                dept: "Department of A.W.S."
            }
        },
        "2021-2022": {
            "President": {
                name: "William Brown",
                img: "https://via.placeholder.com/150?text=William+Brown",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Isabella Garcia",
                img: "https://via.placeholder.com/150?text=Isabella+Garcia",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Lucas Moore",
                img: "https://via.placeholder.com/150?text=Lucas+Moore",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Charlotte Taylor",
                img: "https://via.placeholder.com/150?text=Charlotte+Taylor",
                dept: "Department of A.W.S."
            }
        },
        "2020-2021": {
            "President": {
                name: "Henry Davis",
                img: "https://via.placeholder.com/150?text=Henry+Davis",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Amelia Wilson",
                img: "https://via.placeholder.com/150?text=Amelia+Wilson",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Mason Lee",
                img: "https://via.placeholder.com/150?text=Mason+Lee",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Harper Johnson",
                img: "https://via.placeholder.com/150?text=Harper+Johnson",
                dept: "Department of A.W.S."
            }
        },
        "2019-2020": {
            "President": {
                name: "Ethan Young",
                img: "https://via.placeholder.com/150?text=Ethan+Young",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Ava Martinez",
                img: "https://via.placeholder.com/150?text=Ava+Martinez",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Logan Harris",
                img: "https://via.placeholder.com/150?text=Logan+Harris",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Mia Walker",
                img: "https://via.placeholder.com/150?text=Mia+Walker",
                dept: "Department of A.W.S."
            }
        },
        "2018-2019": {
            "President": {
                name: "James Carter",
                img: "https://via.placeholder.com/150?text=James+Carter",
                dept: "Department of CSE"
            },
            "Secretary": {
                name: "Emily Davis",
                img: "https://via.placeholder.com/150?text=Emily+Davis",
                dept: "Department of CSE"
            },
            "President of A.W.S.": {
                name: "Benjamin Clark",
                img: "https://via.placeholder.com/150?text=Benjamin+Clark",
                dept: "Department of A.W.S."
            },
            "Secretary of A.W.S.": {
                name: "Sophie Brown",
                img: "https://via.placeholder.com/150?text=Sophie+Brown",
                dept: "Department of A.W.S."
            }
        }
    };

    let selectedYear = "2023-2024";

    function renderTimeline() {
        const timeline = document.getElementById('timeline');
        timeline.innerHTML = '';
        Object.keys(executives).forEach((year, index) => {
            const div = document.createElement('div');
            div.className = 'flex items-center w-full animate-fadeIn';
            div.style.animationDelay = `${index * 0.1}s`;
            const button = document.createElement('button');
            button.className =
                `timeline-dot w-6 h-6 rounded-full ${selectedYear === year ? 'bg-blue-600' : 'bg-gray-400'} mr-4`;
            button.onclick = () => handleYearClick(year);
            const p = document.createElement('p');
            p.className = `text-sm font-medium ${selectedYear === year ? 'text-blue-600' : 'text-gray-600'}`;
            p.textContent = year;
            div.appendChild(button);
            div.appendChild(p);
            timeline.appendChild(div);
        });
    }

    function renderExecutives() {
        const panel = document.getElementById('executive-panel');
        panel.innerHTML = '';
        const grid = document.createElement('div');
        grid.className = 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8';
        Object.entries(executives[selectedYear]).forEach(([role, data], index) => {
            const card = document.createElement('div');
            card.className = 'flex flex-col items-center card-hover animate-fadeIn';
            card.style.animationDelay = `${index * 0.1}s`;
            const img = document.createElement('img');
            img.src = data.img;
            img.alt = data.name;
            img.className = 'w-32 h-32 rounded-full object-cover mb-3';
            const name = document.createElement('h3');
            name.className = 'text-lg font-semibold text-gray-900 text-center';
            name.textContent = data.name;
            const roleP = document.createElement('p');
            roleP.className = 'text-gray-600 text-center';
            roleP.textContent = role;
            const dept = document.createElement('p');
            dept.className = 'text-gray-500 text-center text-sm';
            dept.textContent = data.dept;
            card.appendChild(img);
            card.appendChild(name);
            card.appendChild(roleP);
            card.appendChild(dept);
            grid.appendChild(card);
        });
        panel.appendChild(grid);
    }

    function handleYearClick(year) {
        selectedYear = year;
        renderTimeline();
        renderExecutives();
    }

    // Initial render
    document.addEventListener('DOMContentLoaded', () => {
        renderTimeline();
        renderExecutives();
    });
    </script>
</body>

</html>