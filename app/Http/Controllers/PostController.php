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
    public function show(Post $post)
    {
        //return view('posts.show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
        return view('posts.show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts.create');
    }
}
