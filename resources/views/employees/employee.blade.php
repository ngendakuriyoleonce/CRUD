@extends("compnent.base")
@section('title',"Employees List")
@section('content')

<!-- Table -->
<div class="bg-white rounded-2xl shadow p-6 overflow-x-auto">

    <div class="flex items-center justify-between mb-6">

        <h2 class="text-2xl font-bold text-gray-800">
            Employees Table
        </h2>

        <a href="{{route('createEmp')}}" class="bg-black text-white px-5 py-2 rounded-xl hover:opacity-90">
            + Add Employee
        </a>

    </div>

    <table class="w-full border-collapse">

        <!-- Table Head -->
        <thead>
            <tr class="bg-gray-100 text-gray-700 text-left">

                <th class="p-4 font-semibold rounded-l-xl">
                    ID
                </th>

                <th class="p-4 font-semibold">
                    Name
                </th>

                <th class="p-4 font-semibold">
                    Email
                </th>

                <th class="p-4 font-semibold">
                    Department
                </th>

                <th class="p-4 font-semibold">
                    Salary
                </th>

                <th class="p-4 font-semibold rounded-r-xl">
                    Actions
                </th>

            </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-200">

            <tr class="hover:bg-gray-50 transition">

                <td class="p-4">1</td>

                <td class="p-4 font-medium text-gray-800">
                    John Doe
                </td>

                <td class="p-4 text-gray-600">
                    john@example.com
                </td>

                <td class="p-4">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                        IT
                    </span>
                </td>

                <td class="p-4">
                    $1200
                </td>

                <td class="p-4 flex gap-2">

                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:opacity-90">
                        Edit
                    </button>

                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:opacity-90">
                        Delete
                    </button>

                </td>

            </tr>

        </tbody>

    </table>

</div>
@endsection