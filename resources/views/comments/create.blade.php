@extends('layouts.app')
@section('title')Create Comment @endsection
@section('content')

    <form class="m-4 border border-3 bg-dark rounded rounded-3" method="post" action="{{route('blogs.comments.store',['blogId'=>$blogId])}}">
        @csrf
        <div class="m-3">
            <label for="exampleInputEmail1" class="text-white form-label">Name</label>
            <input name="name" type="text" class="form-control" id="" aria-describedby="">
        </div>
        <div class="form-floating  m-3">
            <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; resize: none"></textarea>
            <label for="floatingTextarea2">Comment</label>
        </div>
        <button type="submit" class="btn btn-success m-3">Submit</button>
    </form>

@endsection
