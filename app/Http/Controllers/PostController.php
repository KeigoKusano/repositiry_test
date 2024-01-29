<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //return $post->get();
        //return view('posts.index')->with(['posts' => $post->getByLimit(1)]);
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(2)]);
    }
}
