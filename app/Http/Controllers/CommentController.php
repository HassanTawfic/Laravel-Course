<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentable()
    {
        return $this->morphTo();
    }
}
