<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();

        return view('admin.category.index',['categories'=>$category]);
    }

    public function create() {

        return view('admin.category.create');

    }

    public function store(Request $request) {

        $category = new Category();
        $category->title = $request->get('category');
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id) {
        Category::destroy($id);
        return redirect()->route('category.index');
    }
}
