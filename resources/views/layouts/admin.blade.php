<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-950 text-white min-h-screen">

    <div class="flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 p-6 min-h-screen">
            <h2 class="text-2xl font-bold mb-8">Admin Panel</h2>

            <nav class="space-y-3">
                <a href="{{ url('/admin/projects') }}" class="block hover:text-indigo-400">Projects</a>
                <a href="{{ url('/') }}" class="block hover:text-indigo-400">View Site</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

    </div>

</body>
</html>
