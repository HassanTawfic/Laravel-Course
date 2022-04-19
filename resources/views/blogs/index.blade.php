@extends('layouts.app')


@section('title')Index @endsection
@section('content')

    <div class="CreateButton d-flex">
        <a href="/blog/create" type="button" class="btn btn-success mb-3 mt-5 ms-auto text-wrap">Create a new blog post!</a>
    </div>
    <div class="TableDisplay">
        <table class="table table-light table-striped ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
            <tr>
                <th class="">{{$blog->id}}</th>
                <td class="">{{$blog->title}}</td>
                <td class="">{{$blog->postedBy}}</td>
                <td class="">{{$blog->createdAt}}</td>
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="" type="button" class="btn btn-primary me-2">Edit</a>
                        <a href="/blog/{{$blog['id']}}" type="button" class="btn btn-success me-2">View</a>
                        <a href="" type="button" class="btn btn-danger me-2">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
