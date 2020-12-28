<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('user.employee.create');
    }

    public function store(CreateEmployeeRequest $request){
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->role = $request->role;
        $employee->save();

        return redirect()->back()->with('message', 'Employee created successfully.');
    }
}
