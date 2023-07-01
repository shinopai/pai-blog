<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;

class EditController extends Controller
{
    public function index(Post $post)
    {
        return view('post.edit.index', compact('post'));
    }

    public function submit(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user_id;
        $post->save();

        return redirect()->route('post.show', $post)->with('flash', '記事を更新しました');
    }
}
