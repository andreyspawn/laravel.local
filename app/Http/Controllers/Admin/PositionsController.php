<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Position;

class PositionsController extends Controller
{
    //
    public function index() {
        $positions = Position::all();
        return view('admin.position.index',['positions'=>$positions]);
    }

    public function create() {
        return view('admin.position.create');
    }

    public function store(Request $request) {

        $position = new Position();
        $position->position_name = $request->get('position_name');
        $position->salary = $request->get('salary');
        $position->save();
        return redirect()->route('position.index');
    }


}
