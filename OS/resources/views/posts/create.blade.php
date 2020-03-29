@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('posts.store')}}"  class ="container col-md-3 m-auto p-3 ">
    @csrf
  
    <div class="form-group">   
      <label class=" m-2" >Title</label>
      <input name="title" type="text" class="form-control col-md-12" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="">Description</label>
      <textarea name="description" class="form-control col-md-12" rows="5">

      </textarea>
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Users</label>
      <select name="user_id" class="form-control col-md-12">
        @foreach($users as $user)  
          <option value="{{$user->id}}"> {{$user->name}} </option>
        @endforeach
        </select>
        </div>
        <div class="col-md-12 text-center"> 
    <button type="submit" class="btn btn-primary ">Submit</button>
  </div>
  </form>
  @endsection
  