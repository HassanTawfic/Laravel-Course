@extends('layouts.app')
@section('title')Create Blog @endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="m-4 border border-3 bg-dark rounded rounded-3" method="post" action="{{route('blogs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="m-3">
            <label for="exampleInputEmail1" class="text-white form-label">Title</label>
            <input name="title" type="text" class="form-control" id="" aria-describedby="">
        </div>
        <div class="form-floating  m-3">
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; resize: none"></textarea>
            <label for="floatingTextarea2">Write your post here!</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Upload an image</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="d-flex justify-content">
            <label class="text-white from-label px-3 my-2" for="">Post Creator</label>
            <select name="postedBy" class="form-select py-1 my-1" aria-label="Default select example">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success m-3">Submit</button>
    </form>
@endsection
