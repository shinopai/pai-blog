<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\User;

class CreateController extends Controller
{
    public function index()
    {
        return view('post.create.index');
    }

    public function submit(PostRequest $request)
    {
        $user = User::find($request->user_id);

        $user->posts()->create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('post.index')->with('flash', '新規記事を投稿しました。');
    }
}
