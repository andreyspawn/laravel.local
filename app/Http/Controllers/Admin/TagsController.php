<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    //
    public function index()
    {
        $tags = Tags::all();

        return view('admin/tags/index',['tags'=>$tags]);
    }

    public function delete($id) {
        Tags::destroy($id);
        return redirect()->route('tagsList');
    }
}
