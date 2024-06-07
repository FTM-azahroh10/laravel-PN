<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments', 'likes')->get();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'pejabat' => 'required'
        ]);
        
        Post::create($request->all());
        return redirect()->back();
    }

    // public function show($pejabat)
    // {
    //     $posts = Post::where('pejabat', $pejabat)->with('comments', 'likes')->get();
    //     return view('post.show', compact('posts', 'pejabat'));
    // }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }

    public function show($pejabat)
    {
        $posts = Post::where('pejabat', $pejabat)->with('comments', 'likes')->get();
        return view('post.index', compact('posts', 'pejabat'));
    }

}
