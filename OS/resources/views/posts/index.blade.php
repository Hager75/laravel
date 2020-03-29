@extends('layouts.app')
@section('content')
<div class="container mx-auto p-1">
      <a href="{{route('posts.create')}}" class="btn btn-success mb-5">Create Post</a>
          <table class="table badge-light">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->description }}</td>

                  <td>{{ $post->user ? $post->user->name : 'not exist'}}</td>
                  <td>{{ $post->created_at }}</td>

                <td>
            <div class="d-flex flex-row">              
                <a href="{{route('posts.show',['post' => $post->id])}}" class="btn btn-primary btn-sm m-1 ">View</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm m-1 ">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this post?')" 
                href="/posts/{{$post->id}}/delete" 
                class="btn btn-danger btn-sm m-1" >Delete</a>

                </td>
            </div>          
                </tr>
              @endforeach
              </tbody>
            </table>
            {{ $posts->links() }}
      </div>
@endsection 