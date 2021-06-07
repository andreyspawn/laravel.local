<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
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
}
