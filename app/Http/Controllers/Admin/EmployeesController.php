<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Department;
use App\Position;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //
    public function index() {
        $employees = Employee::all();
        //dd($employees->find(6)->department->getlistLevel());
        return view('admin.employee.index',['employees'=>$employees]);
    }

    public function create() {
        $departments = Department::pluck('department_name')->all();
        $positions = Position::pluck('position_name')->all();
        //dd($positions);
        return view('admin.employee.create',['departments'=>$departments,'positions'=>$positions]);
    }

    public function store(Request $request) {
        dd($request);
        return redirect()->route('employee.index');
    }

    public function delete($id) {
        Employee::find($id)->delete();
        return redirect()->route('employee.index');
    }
}
