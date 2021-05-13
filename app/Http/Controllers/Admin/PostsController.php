<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index() {
        $posts = Post::all();
        return view('admin.post.index', ['posts' => $posts]);
    }

    public function create() {
        return view('admin.post.create');
    }
}
