@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>All Posts</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{route('posts.create')}}" class="btn btn-success mx-1">Create</a>
                        <a href="{{route('posts.trashed')}}" class="btn btn-warning mx-1">Thrashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><img src="{{asset($post->image)}}" alt="" width="50"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                            <td>
                                <a href="{{route('posts.show', $post->id)}}" class="btn-sm btn-success">Show</a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary">Edit</a>
                                {{-- <a href="" class="btn-sm btn-danger">Delete</a> --}}
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
