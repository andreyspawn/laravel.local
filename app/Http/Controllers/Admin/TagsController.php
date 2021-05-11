<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    //
    public function index()
    {
        $tags = Tags::all();
        return view('admin.tags.index',['tags'=>$tags]);
    }

    public function destroy($id) {
        Tags::destroy($id);
        return redirect()->route('tag.index');
    }

    public function create() {

        return view('admin.tags.create');

    }

    public function store(Request $request) {

        $tag = new Tags();
        $tag->tag = $request->get('tag');
        $tag->updated_at = date(now());
        $tag->save();
        return redirect()->route('tag.index');
    }
}
