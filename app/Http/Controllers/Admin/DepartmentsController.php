<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Controllers\Controller;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DepartmentsController extends Controller
{

    public function index()
    {


        $children = Department::whereNull('parent_id')->with('childrenDepartments')->get();
        //return view('admin.department.indexTable',['children'=>$children,'maxLevel'=>$maxLevel,'root'=>$root]);
        if (Gate::allows('allow','admin.department.indexList')) {
            return view('admin.department.indexList',['children'=>$children]);
        }
        return view('admin.forbidden');

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
        $fields = $request->all();
        //dd($fields);
        Department::add($fields);

        return redirect()->route('department.index');
    }




}
