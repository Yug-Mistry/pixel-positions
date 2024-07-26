<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400..600;1,400..600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body class=" bg-black text-white font-hanken-grotesk flex justify-center">
    <div class="px-10 min-h-screen min-w-[96vw]">
        <!-- Navigation -->
        <nav class="flex justify-between items-center py-4 border-b border-white/10 min-w-screen">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions">
                </a>
            </div>
            <div class="flex gap-2 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div class = "flex items-center space-x-2">
                <x-square color="blue"  />
                <a href="">Post a job</a>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="mt-10" >
            {{ $slot }}
        </main>
    </div>
</body>
</html>
