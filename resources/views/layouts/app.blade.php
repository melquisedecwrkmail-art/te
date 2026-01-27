<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MelPortfolio</title>
    @vite('resources/css/app.css') <!-- Breeze + Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-xl font-bold">MelPortfolio</div>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-blue-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-500">About</a>
                <a href="{{ route('projects') }}" class="hover:text-blue-500">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </div>
</body>
</html>
