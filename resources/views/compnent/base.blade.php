<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title')</title>
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-gray-100">

    <!-- Top Navbar -->
    <nav class="bg-white shadow-md">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-16">

                <!-- Logo -->
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        DASHBOARD
                    </h1>
                </div>

                <!-- Menu -->
                <div class="flex items-center space-x-6">

                    <a href="/" class="text-gray-700 hover:text-black font-medium">
                        Home
                    </a>

                    <a href="{{route('emplist')}}" class="text-gray-700 hover:text-black font-medium">
                        Employees
                    </a>

                    <a href="{{route('createD')}}" class="text-gray-700 hover:text-black font-medium">
                        Departements
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