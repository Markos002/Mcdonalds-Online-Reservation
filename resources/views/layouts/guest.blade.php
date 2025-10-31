<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/index.css','resources/js/modal.js'])
</head>
<body class="font-sans text-gray-100 antialiased background">

    <div class="min-h-screen flex flex-col items-center justify-center relative overflow-hidden">
        <!-- Background Decoration (optional cube blur like your sample image) -->
        <div class="absolute top-20 left-1/2 transform -translate-x-1/2 opacity-40 blur-2xl">
            <div class="w-72 h-72 bg-[#d9232e] rounded-2xl rotate-45"></div>
        </div>


        <a href="{{ route('home') }}" class="absolute top-6 left-6 flex items-center space-x-3">
            <img src="{{ asset('circle1.png') }}" alt="McDonald's Logo" class="w-10">
            <h1 class="text-xl font-semibold text-[#ffcc00]">McDonald's</h1>
        </a>

        <!-- Login Container -->
        <div class="scroll-panel relative w-full max-w-md md:max-w-3xl py-6 sm:max-h-[80vh] lg:max-h-[300vh] overflow-y-auto p-5 pt-20">
            <div class="w-full bg-gray-800 rounded-lg">
                {{ $slot }}
            </div>
        </div>


        <!-- Footer (optional small text) -->
        <footer class="absolute bottom-4 text-xs text-gray-300">
            © {{ date('Y') }} McDonald's Online Reservation. All rights reserved.
        </footer>
    </div>
</body>
</html>
