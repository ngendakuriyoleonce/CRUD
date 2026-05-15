<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view('dashboard');
}
 );
Route::get('/createDep',[DepartmentController::class,'index'])->name('createD');
Route::post('/Dep',[DepartmentController::class,'store'])->name('store');
Route::get('/departement/{id}/edit',[DepartmentController::class,'edit'])->name('editDep');
Route::put('/departement/{id}/edit',[DepartmentController::class,'update'])->name('update');
Route::delete('/Depdel/{id}',[DepartmentController::class,'destroy'])->name('delete');

Route::get('/Emp',[EmployeController::class,'index'])->name('emplist');
Route::get('/createEmp',[EmployeController::class,'create'])->name('createEmp');
Route::post('/createEmp',[EmployeController::class,'store'])->name('storeemp');
Route::get('/Employe/{id}/edit',[EmployeController::class,'edit'])->name('editEmp');
Route::put('/Employe/{id}',[EmployeController::class,'update'])->name('updateEmp');
Route::delete('/Employe/{id}',[EmployeController::class,'destroy'])->name('deletee');