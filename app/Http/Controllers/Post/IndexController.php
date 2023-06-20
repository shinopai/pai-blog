<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('post.index', compact('posts'));
    }
}
