<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{

public function index(){

    $blogs = Blog::all();
    dd($blogs);
    //$filteredPost = Blog::where('title','js')->get();
    //dd($filteredPost);

    return view('blogs/index',['blogs'=> $blogs]);
}
public function create()
{
    $users = User::all();
    //dd($users);
    return view('blogs/create',['users'=> $users]);
}
public function show($id){


    //$targetBlog = Blog::where('id',$id)->first();
    $targetBlog = Blog::find($id);

    return view('blogs/show',['blog'=> $targetBlog]);

}
    public function store(){
        $data = request()->all();
        Blog::create([
           'title' => $data['title'],
           'description' => $data['description'],
           'user_id' => $data['postedBy'],
        ]);
        //$blogs = Blog::all();
        return to_route('blogs.index');
    }

}
