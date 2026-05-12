<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Top Navbar -->
    <nav class="bg-white shadow-md">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-16">

                <!-- Logo -->
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        Admin Panel
                    </h1>
                </div>

                <!-- Menu -->
                <div class="flex items-center space-x-6">

                    <a href="/" class="text-gray-700 hover:text-black font-medium">
                        Home
                    </a>

                    <a href="{{route('create')}}" class="text-gray-700 hover:text-black font-medium">
                        Employés
                    </a>

                    <a href="{{route('createD')}}" class="text-gray-700 hover:text-black font-medium">
                        Départements
                    </a>

                    <a href="/employees/create"
                       class="bg-black text-white px-4 py-2 rounded-xl hover:opacity-90">
                        + Créer
                    </a>

                </div>

            </div>

        </div>

    </nav>

    <!-- Main Content -->
    <div class="max-w-7xls mx-auto p-8 ">
        @yield('content')
    </div>

</body>
</html>