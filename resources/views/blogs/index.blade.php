@extends('layouts.app')
@section('title')Index @endsection
@section('content')

    <div class="CreateButton d-flex">
        <a href="/blog/create" type="button" class="btn btn-success mb-3 mt-5 ms-auto border border-white border-1 text-wrap">Create a new blog post!</a>
    </div>
    <div class="TableDisplay">
        <table class="table table-dark table-hover border border-white border-2">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
            <tr>
                <th class="">{{$blog->id}}</th>
                <td class="">{{$blog->title}}</td>
                <td class="">{{$blog->user->name ?? 'Not Found'}}</td>
                <td class="">{{$blog->created_at}}</td>
                <td class="">{{$blog->updated_at}}</td>
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="{{route('blogs.show',['id'=>$blog['id']])}}" type="button" class="btn btn-success me-2 border border-white border-1">View</a>
                        <a href="{{route('blogs.edit',['id'=>$blog['id']])}}" type="button" class="btn btn-primary me-2 border border-white border-1">Edit</a>
                            <button class="btn btn-danger me-2 border border-white border-1" data-bs-toggle="modal" data-bs-target="#blogDelete_{{$blog->id}}" >Delete
                        </button>
                        <div class="modal fade" id="blogDelete_{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger" id="exampleModalLabel">DELETION?!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <p class="text-dark">Are you sure you want to delete <span class="fw-bolder">{{$blog->title}}</span> By <span class="fw-bolder">{{$blog->user->name}}</span> ??</p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form method="post" action="{{route('blogs.destroy',['id'=>$blog['id']])}}" class="delete">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"> Yes, I'm sure</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{$blogs->links()}}
        </div>
    </div>
@endsection


