<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{

public function index(){

    $blogs = Blog::paginate(3);
    return view('blogs/index',['blogs'=> $blogs]);
}
public function create()
{
    $users = User::all();
    return view('blogs/create',['users'=> $users]);
}
public function show($id){


    //$targetBlog = Blog::where('id',$id)->first();
    $targetBlog = Blog::find($id);
    $user = User::find($targetBlog->user_id);
    $date = Carbon::parse($targetBlog['created_at'])->format('l jS \\of F Y h:i:s A');
    return view('blogs.show',['blog'=> $targetBlog, 'user'=> $user, 'date'=>$date]);

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

    public function update($id){
    $data = request()->all();
    //dd($data,$id);

    $targetBlog = Blog::find($id);
    $targetBlog->title = $data['title'];
    $targetBlog->description = $data['description'];
    $targetBlog->user_id = $data['postedBy'];
    $targetBlog->save();
    return to_route('blogs.index');
    }

    public function edit($id){
        $targetBlog = Blog::find($id);
        //$user = User::find($targetBlog->user_id)
        $users = User::all();
        //return view('blogs/show',['blog'=> $targetBlog, 'user'=> $user, 'date'=>$date]);
        return view( 'blogs.edit',['blog'=> $targetBlog, 'users'=> $users]);
    }

    public function destroy($id){
    dd($id);
    $targetBlog = Blog::find($id);
        dd($targetBlog);
        $targetBlog->delete();
        return to_route('blogs.index');
    }
}
