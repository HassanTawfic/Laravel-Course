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

    public function edit($commentId)
    {
        $targetComment = Comment::find($commentId);
        return view('comments.edit',['comment'=>$targetComment]);
    }

    public function update($commentId)
    {
        $data = request()->all();
        $targetComment = Comment::find($commentId);
        $targetComment->commentedBy = $data['commentedBy'];
        $targetComment->comment = $data['comment'];
        $targetComment->save();
        $blog = new BlogController();
        return $blog->show($targetComment->commentable_id);
    }

    public function destroy($commentId){
        $targetComment = Comment::find($commentId);
        $blogId = $targetComment->commentable_id;
        $targetComment->delete();
        $blog = new BlogController();
        return $blog->show($blogId);
    }
}
