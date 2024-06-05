<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.cdnfonts.com/css/hanken-grotesk" rel="stylesheet">

</head>

<body class="bg-black text-2xl text-white pb-20">
    <div class="px-10 m-10">
        <nav class="flex justify-between items-center   border-b border-white/80 p-6">
            <div><a href="/">
                    <img class="max-w-28" src="{{ Vite::asset('resources/images/headPhgonelogo.png') }}"
                        alt="logo"></a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold">
                    <a href="/jobs/create">Post a job</a>
                </div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[1286px] mx-auto">

            {{ $slot }}

        </main>
    </div>

</body>

</html>
