@extends('layouts.app')
@section('content')
<div class="pull-right m-6 text-center">
<h1 class="bg-light">Editing Post</h1>
</div>

    <form action="{{ route('posts.update',$post->id) }}" method="POST" class ="container col-md-3 m-auto p-3 ">
        @csrf
   
        

 <div class="form-group ">
    <label class=" m-2" for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control col-md-12" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $post->title }}">
 </div>


 <div class="form-group ">
    <label for="exampleInputPassword1">Describtion</label>
    <textarea   name="description" class="form-control col-md-12" rows="5" >
    {{ $post->description }}
    </textarea>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Users</label>
    <select name="user_id" class="form-control col-md-12">
    @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
  

  </div>

  <div class="col-md-12 text-center"> 
    <button type="submit" class="btn btn-primary ">Submit</button>
    <a class="btn btn-primary" href="/posts"> Back</a>
  </div>
  </form>
 @endsection