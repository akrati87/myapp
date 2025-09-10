<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('employee', compact('employees'));
    }

    public function store(Request $request){
            Employee::create([
                 'name'=>$request->name,
                    'age'=>$request->age,
                    'email'=>$request->email,
                    'contact'=>$request->contact,
            ]);

            return redirect()->back()->with('success', 'Employee added successfully!');
    }

}
