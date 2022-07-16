<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = POST::all();
        return view('post.index', compact('post'));
    }
}
