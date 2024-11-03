<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGESIT - Adventure Awaits!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for game elements */
        .button-glow {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .button-glow:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(255, 165, 0, 0.5);
        }
        .bg-stars {
            background: radial-gradient(circle, #1a1a2e, #161616);
            position: relative;
        }
        .bg-stars::before {
            /* content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0; */
            background-image: url('stars.png'); /* Replace with star background image */
            /* opacity: 0.6; */
        }
    </style>
</head>
<body class="bg-stars text-white font-sans leading-normal tracking-normal">

    <!-- Hero Section -->
    <header class="flex flex-col items-center justify-center min-h-screen text-center px-6">
        <h1 class="text-5xl font-bold mt-4 mb-2 text-yellow-400">Welcome to SIGESIT!</h1>
        <p class="text-xl mb-6 max-w-lg mx-auto">An adventure in your hands - explore, strategize, and conquer the world of SIGESIT!</p>
        <a href="#features"><button 
                class="button-glow px-6 py-3 text-lg font-bold text-black bg-yellow-400 rounded-full mt-4">
            Start the Adventure
        </button></a>
    </header>

    <!-- Features Section -->
    <section id="features" class="text-center py-12 px-6">
        <h2 class="text-4xl font-semibold text-yellow-400">Why Play SIGESIT?</h2>
        <div class="flex flex-wrap justify-center gap-8 mt-8">
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2 text-yellow-400">Explore</h3>
                    <p class="text-gray-300">Discover new worlds, battle monsters, and find rare treasures!</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2 text-yellow-400">Strategize</h3>
                    <p class="text-gray-300">Plan your moves carefully, conquer challenges, and rise in ranks!</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-2 text-yellow-400">Compete</h3>
                    <p class="text-gray-300">Challenge friends, join clans, and dominate the leaderboard!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Demo Section -->
    <section id="demo" class="text-center py-12 px-6 bg-gray-900">
        <h2 class="text-4xl font-semibold text-yellow-400">Get a Sneak Peek</h2>
        <p class="text-gray-400 mt-4 mb-8">Check out a quick demo of our game features.</p>
        <div class="max-w-2xl mx-auto">
            <video class="w-full rounded-lg shadow-lg" controls autoplay loop>
                <source src="game-demo.mp4" type="video/mp4"> <!-- Replace with actual video link -->
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="text-center py-12 px-6">
        <h2 class="text-4xl font-semibold text-yellow-400">Download SIGESIT Now</h2>
        <p class="text-gray-300 mt-4">Ready to start your journey? Get the app now!</p>
        <div class="flex justify-center gap-4 mt-6">
            <button class="button-glow px-6 py-3 text-lg font-bold text-black bg-yellow-400 rounded-full">Download for Android</button>
            <button class="button-glow px-6 py-3 text-lg font-bold text-black bg-yellow-400 rounded-full">Download for iOS</button>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center py-6 bg-gray-800">
        <p class="text-gray-400">&copy; 2023 SIGESIT. All Rights Reserved.</p>
    </footer>

</body>
</html>
