@extends('layouts.app')

@section('title')Show @endsection

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
    <h2 class="text-center">Comment Section</h2>
    <div class="d-flex justify-content-center ">
        <button class="btn btn-success my-2 border border-white border-1">Add a new Comment</button>
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
                        <a href="#" class="btn btn-danger mt-2 ms-auto">Delete</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

@endsection
