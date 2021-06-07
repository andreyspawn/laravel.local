<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{

    public function index() {

        $children = Department::whereNull('parent_id')->with('childrenDepartments')->get();

        //return view('admin.department.indexTable',['children'=>$children,'maxLevel'=>$maxLevel,'root'=>$root]);
        return view('admin.department.indexList',['children'=>$children]);
    }




}
