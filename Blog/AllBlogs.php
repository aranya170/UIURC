<?php
include_once '../_settings/config.php';

// Simulate blog posts (replace with database query in a real application)
$posts = [];
for ($i = 1; $i <= 12; $i++) {
    $posts[] = [
        'id' => $i,
        'title' => "Blog Post Title $i",
        'excerpt' => "A brief excerpt of the blog post goes here. This is a modern, minimal design.",
        'date' => 'Jan 10, 2022',
        'author' => 'Dasteen',
        'read_time' => '3 Min Read',
        'image' => "https://via.placeholder.com/400x200?text=Post+$i"
    ];
}
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
        <h1 class="text-3xl font-bold text-gray-900 mb-8">All Blogs</h1>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($posts as $post): ?>
            <a href="post.php?id=<?php echo $post['id']; ?>"
                class="bg-white rounded-xl overflow-hidden card-hover fade-in">
                <img src="<?php echo $post['image']; ?>" alt="Blog post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2"><?php echo $post['title']; ?></h2>
                    <p class="text-gray-600 mb-4 line-clamp-2"><?php echo $post['excerpt']; ?></p>
                    <div class="flex items-center text-gray-600 text-sm">
                        <span><?php echo $post['author']; ?></span>
                        <span class="mx-2">•</span>
                        <span><?php echo $post['date']; ?></span>
                        <span class="mx-2">•</span>
                        <span><?php echo $post['read_time']; ?></span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            <nav class="inline-flex space-x-2">
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">Previous</a>
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">1</a>
                <a href="#"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200">2</a>
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">3</a>
                <a href="#"
                    class="px-4 py-2 bg-white rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200">Next</a>
            </nav>
        </div>
    </main>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>