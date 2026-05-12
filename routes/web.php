<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/createEmp',[EmployeController::class,'create'])->name('create');
Route::get('/createDep',[DepartmentController::class,'create'])->name('createD');