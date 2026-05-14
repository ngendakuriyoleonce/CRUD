@extends("compnent.base")
@section('title',"new employe")
@section('content')
    
        <div class="bg-white rounded-2xl shadow p-8 mx-75">

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
                    FULL NAME
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    CONTRY
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter email"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>
             
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    AGE
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
                @foreach ( $departements as $departement)
                    name="department"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
               <option>{{$departement->name}}</option>
                @endforeach
                </select>
               
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    DATE OF HIRE
                </label>

                <input
                    type="date"
                    name="address"
                    placeholder="Enter address"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>

            <!-- Salary -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    SALARY
                </label>

                <input
                    type="number"
                    name="salary"
                    placeholder="Enter salary"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
            </div>
<!-- Salary -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                AGE
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
@endsection