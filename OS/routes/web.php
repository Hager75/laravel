<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', 'PostController@index')->name('posts.index'); 
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::GET('/posts/{post}/edit','PostController@edit')->name('posts.edit');
Route::post('/posts/{post}/','PostController@update')->name('posts.update');
Route::get('/posts/{post}/delete','PostController@destroy')->name('posts.destroy');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
