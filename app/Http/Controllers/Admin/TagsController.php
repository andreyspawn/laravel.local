<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tags;
use Illuminate\Http\Request;

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
        return redirect()->route('tag.list');
    }

    public function createForm() {

        return view('admin/tags/create');

    }

    public function store(Request $request) {

        $tag = new Tags();
        $tag->tag = $request->get('tag');
        $tag->updated_at = date(now());
        $tag->save();
        return redirect()->route('tag.list');
    }
}
