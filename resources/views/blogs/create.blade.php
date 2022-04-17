@extends('layouts.app')
@section('title')Create @endsection
@section('content')

    <form class="m-4 border border-3" method="post">
        @csrf
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-floating  m-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; resize: none"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <div class="">
            <label class="from-label px-3 my-2" for="">Post Creator</label>
            <select class="form-select py-1 my-1" aria-label="Default select example">
                <option value="1">Hassan</option>
                <option value="2">Ahmed</option>
                <option value="3">Tawfic</option>
            </select>
        </div>
        <a href="/blog" type="submit" class="btn btn-success m-3">Submit</a>
    </form>
@endsection
