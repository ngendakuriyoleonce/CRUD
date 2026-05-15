<?php

namespace App\Http\Controllers;

use App\Models\departement;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\VarDumper\Caster\RdKafkaCaster;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    : View
    {
        $employes=employee::with('departement')->paginate(5);
        return view('employees.employee',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
     : View
    {
        $departements=departement::all();
        return view('employees.createemploye',compact('departements'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $validated= $request->validate([
        'name' => ['required','string','max:255'],
        'age' => ['required', 'integer','min:18','max:40'],
        'departement_id'=> ['required'],
        'salary' => ['required', 'integer','min:1000'],
        'contry_code'=> ['required'],
    'date' => ['required','date'],
     'phone' => ['required','digits_between:8,10'],
]);


employee::create($validated);
return back()->with('success',"Empoyee created successfully");

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
    public function edit(string $id)
    {
        $departements=departement::all();
         $employes= employee::FindOrFail($id);
          $countries = [
        '+257' => '🇧🇮 Burundi',
        '+250' => '🇷🇼 Rwanda',
        '+243' => '🇨🇩 DRC',
        '+971' => '🇦🇪 UAE',
    ];
      return view('employees.editemp',compact('employes','departements','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated= $request->validate([
        'name' => ['required','string','max:255'],
        'age' => ['required', 'integer','min:18','max:40'],
        'departement_id'=> ['required'],
        'salary' => ['required', 'integer','min:1000'],
        'contry_code'=> ['required'],
    'date' => ['required','date'],
     'phone' => ['required','digits_between:8,10'],
]);
$employes= employee::FindOrFail($id);
$employes->update($validated);
return redirect()->route('emplist')->with('success',"Empoyee updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employes= employee::FindOrFail($id);
        $employes->delete($id);
        return redirect()->route('emplist');
    }
}
