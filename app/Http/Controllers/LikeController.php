<?php
// app/Http/Controllers/LikeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function toggle($postId)
    {
        $like = Like::where('post_id', $postId)
                    ->where('user_id', auth()->id())
                    ->first();

        if ($like) {
            // Unlike the post
            $like->delete();
        } else {
            // Like the post
            Like::create([
                'post_id' => $postId,
                'user_id' => auth()->id(),
            ]);
        }

        return redirect()->back();
    }
}
