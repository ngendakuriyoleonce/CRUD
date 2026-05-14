@extends("compnent.base")
@section('title',"New Department")
@section('content')
  
        <div class="bg-white  shadow p-8 mx-75">
            @if(session('success'))

<div class="bg-green-500 text-green-200 px-4 py-3 text-center  rounded mb-4">
    {{ session('success') }}
</div>

@endif
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        CREATE NEW DEPARTMENT
    </h2>

    <form action="{{route('store')}}" method="POST">

        @csrf
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    CODE
                </label>

                <input
                    type="text"
                    name="code"
                    placeholder="Enter code"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                 
@error('code')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    NAME
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                 
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>

            <!-- Phone -->
            <div class="block gap-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    DESIGNATION
                </label>

                <input
                    type="text"
                    name="designation"
                    placeholder="Enter designation"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >
                 
@error('designation')
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
                Save Department
            </button>
        </div>

    </form>

</div>
<!-- TABLE -->
<div class="bg-white  shadow p-8 mx-75 mt-10">

    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        DEPARTMENTS LIST
    </h2>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-200  overflow-hidden">

            <!-- Head -->
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-gray-700 font-semibold">
                        #
                    </th>
                    <th class="px-6 py-3 text-left text-gray-700 font-semibold">
                        CODE
                    </th>

                    <th class="px-6 py-3 text-left text-gray-700 font-semibold">
                        NAME
                    </th>

                    <th class="px-6 py-3 text-left text-gray-700 font-semibold">
                        DESIGNATION
                    </th>

                    <th class="px-6 py-3 text-center text-gray-700 font-semibold">
                        ACTION
                    </th>
                </tr>
            </thead>

            <!-- Body -->
            <tbody>
  @forelse ( $departments as $departement)
      
                <tr class="border-t hover:bg-gray-50">

                    <td class="px-6 py-4">
                      {{ $departments->firstItem() + $loop->index}}
                    </td>

                    <td class="px-6 py-4">
                      {{$departement->code}}
                    </td>

                    <td class="px-6 py-4">
                      {{$departement->name}}
                    </td>
                    <td class="px-6 py-4">
                      {{$departement->designation}}
                    </td>

                    <td class="px-6 py-4 text-center flex justify-center gap-3">
            <a href="{{route('editDep',$departement->id)}}" class="  py-2"><i class="bx bx-edit  text-red-500 hover:text-red-700 text-xl"></i></a>

                        <!-- Delete -->
                        <form action="{{route('delete',$departement->id)}}" method="POST">
                            @csrf
                           @method('delete')

                            <button
    type="submit" onclick="return confirm('Are you sure?')"
    class=" px-4 py-2 cursor-pointer"
>
      <i class="bx bx-trash text-red-500 hover:text-red-700 text-xl"></i>
</button>
                        </form>

                    </td>
                </tr>
              
@empty
<tr>
        <td colspan="4" class="text-center py-4 text-gray-500">
            <i class='bx bx-data text-5xl text-gray-400'></i>
            No records found
        </td>
    </tr>

    @endforelse

            </tbody>

        </table>
        {{ $departments->links() }}
    </div>

</div>
@endsection