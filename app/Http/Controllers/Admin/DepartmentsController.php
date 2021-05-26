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
        $maxLevel = $departments->max('parent_id'); //hierarchy level
        $root =  $departments->first(); //root element in structure
        $children = $departments->getChild(1);
        dd($children);
        return view('admin.department.index',['departments'=>$departments,'maxLevel'=>$maxLevel,'root'=>$root]);
    }

    public function getChild($level) {
        $departments = Department::query()->
    }
}
