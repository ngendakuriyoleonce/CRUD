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
                    #
                </th>

                <th class="p-4 font-semibold">
                    NAME
                </th>

                <th class="p-4 font-semibold">
                    PHONE
                </th>
                
                <th class="p-4 font-semibold">
                    COUNTRY
                </th>


                <th class="p-4 font-semibold">
                    DEPARTEMENT
                </th>

                <th class="p-4 font-semibold">
                    SALARY
                </th>

                <th class="p-4 font-semibold rounded-r-xl">
                    Actions
                </th>

            </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-200">
            @forelse ($employes as $employe )
                
          
                
           
            <tr class="hover:bg-gray-50 transition">

                <td class="p-4">  {{ $employes ->firstItem() + $loop->index}}</td>

                <td class="p-4 font-medium text-gray-800">
                    {{$employe->name}}
                </td>

                <td class="p-4 text-gray-600">
                   {{$employe->phone}}
                </td>
<td class="p-4 text-gray-600">
                   {{$employe->contry_code}}
                </td>
                <td class="p-4">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                       {{$employe->departement->name}}
                    </span>
                </td>

                <td class="p-4">
                   {{$employe->salary}}
                </td>

                <td class="p-4 flex gap-2">

                    <a href="{{route('editEmp',$employe->id)}}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:opacity-90">
                        Edit
                    </a>
<form action="{{route('deletee',$employe->id)}}" method="POST">
    @csrf
    @method('DELETE')
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:opacity-90">
                        Delete
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

        </tbody>
@endforelse
    </table>
    
 {{ $employes->links() }}
</div>
@endsection