@extends("compnent.base")
@section('title',"New Department")
@section('content')
    
        <div class="bg-white rounded-2xl shadow p-8 mx-75">

    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        CREATE NEW DEPARTMENT
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
            <div class="block gap-6">
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

            

           
          
            

        <!-- Button -->
        <div class="mt-8 text-center">
            <button
                type="submit"
                class="bg-indigo-500 hover:bg-fuchsia-500 text-white px-8 py-3 rounded-xl"
            >
                Save Department
            </button>
        </div>

    </form>

</div>
@endsection