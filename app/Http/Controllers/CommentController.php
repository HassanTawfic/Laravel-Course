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

    public function create($blogId)
    {
        return view('comments.create',['blogId'=> $blogId]);
    }

    public function store($blogId)
    {
        $data = request()->all();
        Comment::create([
            'comment' => $data['comment'],
            'commentedBy' => $data['name'],
            'commentable_id' => $blogId,
            'commentable_type' => 'App\Models\Blog',
        ]);
        $blog = new BlogController();
        return $blog->show($blogId);
    }
}
