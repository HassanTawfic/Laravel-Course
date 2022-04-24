<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentable()
    {
        return $this->morphTo();
    }

    public function show($id)
    {
        $targetComment = Comment::find($id);
        return view('comments.show', ['comment'=>$targetComment]);
    }
}
