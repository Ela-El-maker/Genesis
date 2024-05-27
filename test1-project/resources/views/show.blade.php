@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Show Posts</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{route('posts.create')}}" class="btn btn-success mx-1">Create</a>
                        <a href="#" class="btn btn-warning mx-1">Thrashed</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    {{-- <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead> --}}
                    <tbody>

                        {{-- <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><img src="{{asset($post->image)}}" alt="" width="50"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                            <td>
                                <a href="#" class="btn-sm btn-success">Show</a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr> --}}
                        <tr>
                            <td>Id</td>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img width="300" src="{{asset($post->image)}}" alt=""></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$post->description}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$post->category->name}}</td>
                        </tr>
                        <tr>
                            <td>Publish Date</td>
                            <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
