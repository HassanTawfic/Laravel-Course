@extends('layouts.app')

@section('title')Show @endsection

@section('content')

    <!--<div class="card mt-5 w-100" >
        <div class="card-body">
           <div class="card-header"></div>
            <h5 class="card-title">{{$blog->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$blog['createdAt']}}</h6>
            <p class="card-text">{{$blog['postedBy']}}</p>
        </div>
    </div>-->

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

@endsection
