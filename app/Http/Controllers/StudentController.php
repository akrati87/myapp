<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::get();
        return view('student', compact('students'));
    }
}
