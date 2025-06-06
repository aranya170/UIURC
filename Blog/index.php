<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
    <style>
    /* Custom animations */
    .fade-in {
        animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Smooth hover effect */
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <?php include ABSPATH . '_includes/header.php'; ?>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 max-w-6xl">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Featured Article</h1>
            <a href="#" class="text-blue-500 font-medium hover:text-blue-600 transition-colors duration-200">See All
                Articles →</a>
        </div>

        <!-- Featured Articles Section -->
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Large Featured Post -->
            <a href="post.php?id=1" class="md:w-1/2 bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="https://via.placeholder.com/600x400?text=Featured+Post" alt="Featured post image"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Fundamentals Of Javascript</h2>
                    <div class="flex items-center text-gray-600 text-sm">
                        <span>Dasteen</span>
                        <span class="mx-2">•</span>
                        <span>Jan 10, 2022</span>
                        <span class="mx-2">•</span>
                        <span>3 Min Read</span>
                    </div>
                </div>
            </a>

            <!-- Smaller Posts -->
            <div class="md:w-1/2 grid grid-cols-1 gap-6">
                <?php for ($i = 2; $i <= 4; $i++): ?>
                <a href="post.php?id=<?php echo $i; ?>" class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150x150?text=Post+<?php echo $i; ?>" alt="Blog post image"
                            class="w-1/3 h-32 object-cover">
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                <?php
                                    $titles = [
                                        2 => "Grid CSS Make Your Life Easier",
                                        3 => "Make Animated Light Mode And Dark Mode Toggle With CSS",
                                        4 => "Make Tic Tac Toe Games With React JS"
                                    ];
                                    echo $titles[$i];
                                    ?>
                            </h3>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span>Dasteen</span>
                                <span class="mx-2">•</span>
                                <span>Jan 10, 2022</span>
                                <span class="mx-2">•</span>
                                <span>3 Min Read</span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endfor; ?>
            </div>
        </div>
    </main>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>