<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommmentController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        # code...
        $comment = new Comment();
        $comment->body = $request->comment;
        $comment->post_id = $id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return redirect()->route('post.single',[$id]);
    }
}
