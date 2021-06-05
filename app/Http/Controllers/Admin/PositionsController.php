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
}
