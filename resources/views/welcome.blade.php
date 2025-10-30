<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/index.css','resources/js/modal.js'])
    @endif
</head>

<body class="flex-1 relative min-h-screen flex flex-col items-center justify-center background text-white overflow-hidden">        
    <!-- Decorative 3D Cube -->
    <div class="scene absolute top-32 lg:top-5 right-[10rem] lg:right-[50rem] blur-sm ">
        <div class="cube">
            <div class="face front"></div>
            <div class="face top"></div>
            <div class="face side"></div>
        </div>
    </div>
    <!-- Header -->
    <header class="w-full py-4 px-6 sm:px-10 lg:px-12 backdrop-blur-xl bg-white/10">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <img src="{{ asset('circle1.png') }}" alt="Mcdo" class="w-12 h-12">
                <p class="text-xl font-semibold">Mc Donald's</p>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center gap-3 sm:gap-4">
                @auth
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ url('/admin/dashboard') }}"
                            class="px-5 py-1.5 border border-white text-white rounded-sm text-sm hover:bg-white hover:text-black transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ url('/guest/dashboard') }}"
                            class="px-5 py-1.5 border border-white text-white rounded-sm text-sm hover:bg-white hover:text-black transition">
                            Dashboard
                        </a>
                    @endif
                @else
                    <x-button.home-button :hrefLink="route('login')">Login</x-button.home-button>
                @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Main Section -->
    <main class=" flex-1 relative flex flex-col-reverse lg:flex-row items-center justify-between w-full max-w-7xl px-6 sm:px-10 lg:px-13 gap-32">
        <!-- Left Content -->
        <div class="flex-1 text-center lg:text-left place-content-center">
            <div class="w-16 h-1 bg-red-600 mx-auto lg:mx-0 mb-6"></div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-semibold leading-tight mb-8">
                Welcome to the<br>
                McDonald's Online<br>
                <div class="flex relative">
                    <p>Reservation</p>
                    <div class="flex-1 lg:flex items-center justify-center absolute right-[4rem] md:right-[5rem] lg:right-[7rem]">
                        <div class=" left-1 w-full max-w-[60px] h-auto ">
                            <img src="{{ asset('kid.png') }}" alt="McDonald's M" class="w-full h-full object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>
            </h1>
            @if (Route::has('login'))
                <nav class="flex items-center gap-3 sm:gap-4">
                    @auth
                        <a href="{{ url('/reservation') }}"
                            class="px-5 py-1.5 border border-white text-white rounded-sm text-sm hover:bg-white hover:text-black transition">
                            Reserve Now!
                        </a>
                    @else
                         <a href="{{ route('register') }}"
                            class="inline-block px-8 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg shadow-lg transition-transform transform hover:-translate-y-1">
                            Reserve Now
                        </a>
                    @endauth
                </nav>
            @endif
        </div>

        <!-- Right Content (Image) -->
        <div class="hidden flex-1 lg:flex items-center justify-center relative">
            <div class="w-full max-w-[500px] sm:max-w-[500px] h-auto ">
                <img src="{{ asset('hero.png') }}" alt="McDonald's M" class="w-full h-full object-contain drop-shadow-2xl">
            </div>
        </div>
    </main>

    @if (Route::has('login'))
        <div class="h-10 hidden lg:block"></div>
    @endif
</body>
</html>


