<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class TweetController extends Controller
{
    public function goIndex() {
        return redirect('tweet/timeline');
    }

    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();

        $posts->load('user');
        // dd($posts);
        return view('tweet.timeline', compact('posts'));
    }

    public function create(Request $request) {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $input = $request->only($post->getFillable());

        $post = $post->create($input);
        $post = $post->save();

        return redirect('tweet/timeline');
    }

    public function delete(Request $request) {
        $posts = Post::find($request->id);
        $posts->delete();
        return redirect('tweet/timeline');
    }
}
