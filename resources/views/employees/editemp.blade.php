@extends("compnent.base")
@section('title',"UPDATE_EMPLOYE")
@section('content')
    
        <div class="bg-white rounded-2xl shadow p-8 mx-75">
@if(session('success'))

<div class="bg-green-500 text-green-200 px-4 py-3 text-center  rounded mb-4">
    {{ session('success') }}
</div>

@endif
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        EDIT NEW EMPLOYEE
    </h2>

    <form action="{{route('updateEmp',$employes->id)}}" method="POST">

        @csrf
@method('PUT')
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
                    placeholder="Enter name" value="{{$employes->name}}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>

            
             <!-- Department -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    COUNTRY
                </label>

                 <select
                name="contry_code"
                 class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black">
                     @foreach ($countries as $code => $country)

        <option 
            value="{{ $code }}" {{ $employes->contry_code == $code ? 'selected' : '' }}
        >    {{ $country }} ({{ $code }}) </option>

    @endforeach
                
            </select>
            @error('contry_code')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
               
            </div>
             
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    AGE
                </label>

                <input
                    type="text"
                    name="age"
                    placeholder="Enter age" value="{{$employes->age}}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                     @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
           
            </div>


            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Phone
                </label>

                <input
                    type="text"
                    name="phone"
                    placeholder="Enter phone" value="{{$employes->phone}}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                     @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
           
            </div>

            <!-- Department -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Department
                </label>

                <select
                
                    name="departement_id" 
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                 <option value="">Select Department</option>
                @foreach ($departements as $departement)
               
               <option value="{{$departement->id}}" {{$employes->departement_id ==  $departement -> id ? "selected" :""}}>
            {{ $departement -> name}}
        </option>
                @endforeach
                </select>
                    @error('departement_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
           
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    DATE OF HIRE
                </label>

                <input
                    type="date"
                    name="date" value="{{ \Carbon\Carbon::parse($employes->date)->format('Y-m-d') }}"
                   
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                             @error('date')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>

            <!-- Salary -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    SALARY
                </label>

                <input
                    type="number"
                    name="salary"
                    placeholder="Enter salary" value="{{$employes->salary}}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                             @error('salary')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
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