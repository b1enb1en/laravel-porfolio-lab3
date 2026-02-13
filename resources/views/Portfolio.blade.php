
<!-- An unexamined life is not worth living. - Socrates -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>

</script>
</head>

<body class="font-sans">

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

<section class="flex h-screen">

    <div class="w-1/2 bg-white flex flex-col justify-center px-20">
        <p class="text-sm font-bold text-yellow-500 mb-4">
            ACT Student
        </p>

        <h1 class="text-6xl font-extrabold leading-tight mb-10">
            I'm Leorenz Bien G. Rodriguez
        </h1>

        <div class="flex gap-6">
            <a href="/about"
               class="bg-yellow-400 px-6 py-3 font-bold text-sm hover:bg-yellow-500 transition">
                MORE ABOUT ME →
            </a>

        </div>
    </div>

    <div class="w-1/2 bg-yellow-400 flex items-end justify-center relative overflow-hidden">
        <img src="{{ asset('images/me.png') }}"
             alt="Profile"
             class="h-[90%] object-cover">
    </div>

</section>
</body>
</html>