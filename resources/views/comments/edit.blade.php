@extends('layouts.app')
@section('title')Edit Comment @endsection
@section('content')

    <form class="m-4 border border-3" method="POST" action="{{route('comments.update',['commentId'=>$comment->id])}}">
        @csrf
        @method('PUT')
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Name</label>
            <textarea name="commentedBy" class="form-control" id="" aria-describedby="" style="height: 30px; resize: none">{{$comment->commentedBy}}</textarea>
        </div>
        <div class="m-3">
            <label for="floatingTextarea2" class="form-label fw-bold">Comment</label>
            <textarea name="comment" class="form-control" placeholder="" id="" style="height: 100px; resize: none">{{$comment->comment}}</textarea>
        </div>
        <button type="submit" class="btn btn-success m-3">Submit</button>
    </form>
@endsection
