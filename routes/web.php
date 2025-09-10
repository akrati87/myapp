<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;



Route::get('/student',[StudentController::class,'index']);
Route::get('/user',[UserController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index']);

Route::post('/employeeStore',[EmployeeController::class,'store'])->name('employeeStore');
