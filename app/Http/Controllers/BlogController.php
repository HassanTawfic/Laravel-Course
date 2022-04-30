<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    $comments = $targetBlog->comments;
    $date = Carbon::parse($targetBlog['created_at'])->format('l jS \\of F Y h:i:s A');
    return view('blogs.show',['blog'=> $targetBlog, 'user'=> $user, 'date'=>$date, 'comments' => $comments]);

}
    public function store(StoreBlogRequest $request){


        $data = request()->all();
            $destinationPath = 'public/images/blogs';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destinationPath,$image_name);
        Blog::create([
           'title' => $data['title'],
           'description' => $data['description'],
           'user_id' => $data['postedBy'],
           'image' => $image_name
        ]);
        //$blogs = Blog::all();
        return to_route('blogs.index');
    }

    public function update($id, UpdateBlogRequest $request){
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
        Storage::delete($targetBlog->image);
        //return view('blogs/show',['blog'=> $targetBlog, 'user'=> $user, 'date'=>$date]);
        return view( 'blogs.edit',['blog'=> $targetBlog, 'users'=> $users]);
    }

    public function destroy($id){
        $targetBlog = Blog::find($id);
        File::delete('public'.$targetBlog->image);
        Storage::delete($targetBlog->image);

        $targetBlog->delete();
        return to_route('blogs.index');
    }
}
