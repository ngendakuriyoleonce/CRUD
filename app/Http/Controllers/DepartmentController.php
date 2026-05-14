<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
       $departments = departement::latest()->paginate(5);
         return view('departement.createdep',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('departement.createdep');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
    'code' => ['required', 'integer','unique:departements,code'],
    'name' => ['required','string','max:255'],
    'designation' => ['required','string','max:255'],
]);
departement::create($validated);
return redirect()->route('createD')->with('success',"Department created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
      $departments= departement::FindOrFail($id);
      return view('departement.editdep',['departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {
        $validated= $request->validate([
    'code' => ['required', 'integer','unique:departements,code'],
    'name' => ['required','string','max:255'],
    'designation' => ['required','string','max:255'],
]);
$departments= departement::FindOrFail($id);
$departments->update($validated);
return redirect()->route('createD')->with('success',"Department updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $departments= departement::FindOrFail($id);
       $departments->delete($id);
return redirect()->route('createD');
    }
}
