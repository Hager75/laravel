
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="card bg-light col-md-4 m-5" style="width: 18rem;">
        <h3 class="card-header">
        Post Info
        </h3>
        <div class="card-body">
        <h5 class="card-title text-primary">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
      
                <a class="btn btn-primary m-2 col-md-2"  href="/posts">Back</a>
      </div>
      </div>

@endsection