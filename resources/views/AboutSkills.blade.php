<!-- Simplicity is the ultimate sophistication. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-slate-900">

<nav class="absolute top-0 left-0 w-full px-8 md:px-16 py-6 
            flex justify-between items-center 
            bg-white/20 backdrop-blur-md z-50">
    <span class="font-bold text-lg">Rdrgz.</span>

    <div id="desktopNav" class="hidden md:flex gap-8 font-semibold">
        <a href="/home" class="nav-link hover:text-yellow-500">Home</a>
        <a href="/about" class="nav-link hover:text-yellow-500">About</a>
        <a href="/goals" class="nav-link hover:text-yellow-500">Goals</a>
    </div>
</nav>

<section class="flex min-h-screen">

    <div class="w-1/2 bg-white px-20 pt-40">
        <p class="text-sm font-bold text-yellow-500 mb-4">
            ABOUT ME
        </p>

        <h2 class="text-5xl font-extrabold mb-8">
            Who I Am
        </h2>
        
        <ul class="space-y-4">
            <li class="flex items-start gap-3">
                <span class="w-2 h-2 mt-2 bg-yellow-400 rounded-full"></span>
                <span>I am a student exploring the world of Laravel, backend development, and system design.</span>
            </li>
            <li class="flex items-start gap-3">
                <span class="w-2 h-2 mt-2 bg-yellow-400 rounded-full"></span>
                <span>I live in Bulihan, Silang, Cavite.</span>
            </li>
            <li class="flex items-start gap-3">
                <span class="w-2 h-2 mt-2 bg-yellow-400 rounded-full"></span>
                <span>I am 20 years old and turning 21 at the month of June.</span>
            </li>
            <li class="flex items-start gap-3">
                <span class="w-2 h-2 mt-2 bg-yellow-400 rounded-full"></span>                
                <span>Currently I am studying at La Verdad Christian College.</span>
            </li>
        </ul>
    </div>

    <div class="w-1/2 relative flex items-center justify-center 
            bg-yellow-400 
            bg-[url('/images/code-bg.png')] 
            bg-cover bg-center">
    </div>
</section>

</body>
</html>