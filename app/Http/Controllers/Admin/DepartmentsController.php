<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{

    public function index()
    {
        $children = Department::whereNull('parent_id')->with('childrenDepartments')->get();
        //return view('admin.department.indexTable',['children'=>$children,'maxLevel'=>$maxLevel,'root'=>$root]);
        return view('admin.department.indexList',['children'=>$children]);
    }

    public function delete($id)
    {
        Department::find($id)->delete();
        return redirect()->route('department.index');
    }

    public function create()
    {
        $departments = Department::pluck('department_name','id');
        $positions = Position::pluck('position_name','id');
        return view('admin.department.create',['departments'=>$departments,'positions'=>$positions]);
    }

    public function store(Request $request)
    {
        dd($request);
        return redirect()->route('department.index');
    }




}
