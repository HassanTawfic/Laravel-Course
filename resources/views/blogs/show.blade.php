@extends('layouts.app')

@section('title')Show @endsection

@section('content')


    <div class="card mt-5 w-100" >
        <div class="card-body">
            <h5 class="card-title">{{$blog['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$blog['createdAt']}}</h6>
            <p class="card-text">{{$blog['postedBy']}}</p>
        </div>
    </div>


@endsection
