@extends('layouts.app')

@section('title')Show Comment @endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            Comment By {{$comment->commentedBy}}
        </div>
        <div class="card-body">
            <p class="card-text">{{$comment->comment}}</p>
        </div>
        <div class="card-footer text-muted">
            {{\Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString()}}
        </div>
    </div>

    <div class="mt-3 d-flex justify-content-center">
        <a href="{{route('blogs.show',['id'=>$comment->commentable_id])}}" type="button" class="btn btn-primary btn-lg me-2 border border-white border-1">Back to Blog</a>
    </div>

@endsection
