<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ForumController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('dashboard', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->subject = $request->subject;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function userPosts()
    {
        $posts = Post::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('userPosts', [
            'posts' => $posts,
        ]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', [
            'post' => $post,
        ]);
    }

    public function editPost(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->subject = $request->subject;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post edited successfully!');
    }

    public function deletePost(Request $request, $id)
    {
        $post = Post::find($id);
        if($post->user_id != auth()->user()->id)
        {
            return redirect()->route('dashboard')->with('error', 'You are not allowed to delete this post!');
        }
        if($post->comments->count() > 0)
        {
            $post->comments()->where('post_id', $request->post_id)->delete();
        }
        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }
}
