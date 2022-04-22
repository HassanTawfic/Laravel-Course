@extends('layouts.app')
@section('title')Edit @endsection
@section('content')

    <form class="m-4 border border-3" method="POST" action="{{route('blogs.update',['id' => $blog['id']])}}">
        @csrf
        @method('PUT')
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Title</label>
            <textarea name="title" class="form-control" id="" aria-describedby="" style="height: 30px; resize: none">{{$blog->title}}</textarea>
        </div>
        <div class="m-3">
            <label for="floatingTextarea2" class="form-label fw-bold">Description</label>
            <textarea name="description" class="form-control" placeholder="" id="" style="height: 100px; resize: none">{{$blog->description}}</textarea>
        </div>
        <div class=" col-11 d-flex justify-content-between">
            <label class="from-label px-3 my-2 fw-bold" for="">Post Creator</label>
            <select name="postedBy" class="form-select py-1 my-1 " aria-label="Default select example">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success m-3">Submit</button>
    </form>
@endsection
