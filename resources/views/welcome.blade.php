<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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

                    <a href="/employees" class="text-gray-700 hover:text-black font-medium">
                        Employés
                    </a>

                    <a href="/departements" class="text-gray-700 hover:text-black font-medium">
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
    <div class="w-1/2 mx-auto p-8 ">

        <div class="bg-white rounded-2xl shadow p-8">

    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        CREATE NEW EMPLOYEE
    </h2>

    <form action="/employees" method="POST">

        @csrf

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter email"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Phone
                </label>

                <input
                    type="text"
                    name="phone"
                    placeholder="Enter phone"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <!-- Department -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Department
                </label>

                <select
                    name="department"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                    <option>IT</option>
                    <option>Finance</option>
                    <option>Marketing</option>
                    <option>HR</option>
                </select>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Address
                </label>

                <input
                    type="text"
                    name="address"
                    placeholder="Enter address"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <!-- Salary -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Salary
                </label>

                <input
                    type="number"
                    name="salary"
                    placeholder="Enter salary"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

        </div>

        <!-- Button -->
        <div class="mt-8 text-center">
            <button
                type="submit"
                class="bg-indigo-500 hover:bg-fuchsia-500 text-white px-8 py-3 rounded-xl"
            >
                Save Employee
            </button>
        </div>

    </form>

</div>

    </div>

</body>
</html>