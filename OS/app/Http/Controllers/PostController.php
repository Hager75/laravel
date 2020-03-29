<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post ;
use App\User ;

class PostController extends Controller
{
    function index () {
        $posts = Post::paginate(3);
        return view('posts/index', [
            'posts' => $posts,
        ]);
        }

    function create () {
         $users = User::all();
        return view('posts.create', [
             'users' => $users
        ]);
        }   
            
    function store () {
        $request = request();
        Post::create([
            'title' => $request->title,
            'description' =>  $request->description,
             'user_id' =>  $request->user_id,
        ]);
        return redirect()->route('posts.index');
        ;}         

public function show()
{
    $request = request();
    $postId = $request->post;
    $post = Post::find($postId);
    return view('posts.show',[
        'post' => $post,
    ]);
}
public function edit()
{ 
  $request=request();
 $post_id=$request->post;
 $post= Post::find($post_id); 
 $users = User::all();

return view('posts.edit',[
'post'=>$post,'users'=>$users,
]);
 }


public function update()
{
  $request=request();
  $post_id=$request->post;
  $post= Post::find($post_id); 
  $post->update($request->all());
   return redirect('/posts');
}

public function destroy()
   { 
    $request=request();
    $post_id=$request->post;
    $post= Post::find($post_id); 
    $post->delete();
    return redirect('/posts');
   
    }

}
