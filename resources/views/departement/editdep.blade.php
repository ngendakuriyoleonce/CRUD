@extends("compnent.base")
@section('title',"Edit Department")
@section('content')
  
        <div class="bg-white  shadow p-8 mx-75">
            @if(session('success'))

<div class="bg-green-500 text-green-200 px-4 py-3 text-center  rounded mb-4">
    {{ session('success') }}
</div>

@endif

    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
        EDIT DEPARTMENT
    </h2>

    <form action="{{route('update', $departments->id)}}" method="POST">

        @csrf
        @method('put')
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
                    value="{{old('code',$departments->code)}}"
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
                     value="{{old('name',$departments->name)}}"
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
                      value="{{old('designation',$departments->designation)}}"
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
                Update Department
            </button>
        </div>

    </form>

</div>


@endsection