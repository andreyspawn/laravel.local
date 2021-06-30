<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Position;
use Illuminate\Support\Facades\Gate;

class PositionsController extends Controller
{
    //
    public function index() {
        $positions = Position::all();
        if (Gate::allows('allow','admin.position.index')) {
            return view('admin.position.index',['positions'=>$positions]);
        }
        return view('admin.forbidden');
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

    public function  delete($id) {
        Position::find($id)->delete();
        return redirect()->route('position.index');
    }


}
