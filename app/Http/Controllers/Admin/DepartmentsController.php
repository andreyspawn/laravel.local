<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //
    public function index() {
        $departments = Department::all();
        return view('admin.department.index',['departments'=>$departments]);
    }
}
