<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //
    public function index() {
        $dept = DB::table('departments');
        $maxLevel = $dept->distinct()->count('parent_id');
        $root = $dept ->first();
        Employee::all()->find(1)->

        //$departments = Department::all();
        dd($root);  //=  $departments->first(); //root element in structure
        //$children = Department::getChild(1);
        $children = Department::whereNull('parent_id')->with('childrenDepartments')->get();

        //dd($children);
//        foreach ($children as $child) {
//            dd($child->childrenDepartments);
//        }


        //return view('admin.department.indexTable',['children'=>$children,'maxLevel'=>$maxLevel,'root'=>$root]);
        return view('admin.department.indexList',['children'=>$children,'maxLevel'=>$maxLevel,'root'=>$root]);
    }

    public function getTree($maxlevel) {
        $level=1;
        if ($level === $maxlevel) return $departments;
        $departments[] = DB::select("SELECT id, department_name FROM departments where parent_id=?",[$level]);
        dd($departments);
        $departments[$level] = $this->getTree($level-1);
        return $departments;
    }
}
