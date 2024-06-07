<?php

// app/Http/Controllers/CommentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // public function store(Request $request, $postId)
    // {
    //     $request->validate(['content' => 'required']);
    //     $comment = new Comment();
    //     $comment->content = $request->content;
    //     $comment->post_id = $postId;
    //     $comment->save();
    //     return redirect()->back();
    // }

    public function store(Request $request, $postId)
    {
        $request->validate(['content' => 'required']);
        Comment::create([
            'content' => $request->content,
            'post_id' => $postId,
            'user_id' => auth()->id(),
        ]);
        return redirect()->back();
    }

    public function destroy($commentId)
    {
        $comment = Comment::find($commentId);
        if ($comment) {
            $comment->delete();
        }
        return redirect()->back();
    }
}
