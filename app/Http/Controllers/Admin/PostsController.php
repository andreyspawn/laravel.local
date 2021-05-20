<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index() {
        $posts = Post::all();
        $categories = Category::all();
        return view('admin.post.index', ['posts' => $posts, 'categories' => $categories]);
    }

    public function create() {
        return view('admin.post.create');
    }
}
