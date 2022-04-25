@extends('layouts.app')

@section('title')Show Blog @endsection

@section('content')

    <div class="card mt-5 w-100">
        <div class="card-header fs-3">
            Post Information
        </div>
        <div class="card-body">
            <h4 class="card-title">Title :- </h4>
            <h6 class="mb-3">{{$blog->title}}</h6>
            <h5>Description:- </h5>
            <p class="my-2">{{$blog->description}}</p>

        </div>
    </div>

    <div class="card my-5 w-100">
        <div class="card-header fs-3">
            Post Creator Info
        </div>
        <div class="card-body">
            <h6 class="mb-3">Name: {{$user->name}}</h6>
            <h6 class="mb-3">Email: {{$user->email}}</h6>
            <h6 class="mb-3">Created At: {{$date}}</h6>
        </div>
    </div>
    <h2 class="text-center text-light">Comment Section</h2>
    <div class="d-flex justify-content-center ">
        <a href="{{route('blogs.comments.create',[$blog->id])}}" class="btn btn-success my-2 border border-white border-1">Add a new Comment</a>
    </div>
    <div class=" ">

        @foreach($comments as $comment)

            <div class="card m-3 ">
                <div class="card-header fw-bold">
                    Featured Comment
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$comment->comment}}</p>
                        <footer class="blockquote-footer my-1">by {{$comment->commentedBy}} <cite title="Source Title">{{\Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString()}}</cite></footer>
                    </blockquote>
                    <div class="d-flex">
                        <a href="{{route('comments.show',['id'=>$comment['id']])}}" type="button" class="btn btn-success mt-2 me-2 ms-auto">View</a>
                        <a href="{{route('comments.edit',['commentId'=>$comment['id']])}}" type="button" class="btn btn-primary mt-2 me-2">Edit</a>
                        <button class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#commentDelete_{{$comment->id}}">Delete</button>
                        <div class="modal fade" id="commentDelete_{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="exampleModalLabel">DELETION?!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-dark">Are you sure you want to delete comment by <span class="fw-bolder">{{$comment->commentedBy}}</span> ??</p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form method="post" action="{{route('comments.destroy',['commentId'=>$comment['id']])}}" class="delete">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"> Yes, I'm sure</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

@endsection
