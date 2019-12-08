<?php

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
// User get request to home page => response loding view welcome in resources/views
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello, this is my first post',
//         'my-second-post' => 'Hello, this is my second post'
//     ];
//     return $posts[$post];
// }); 

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts', function() {
    // $post = App\Post::all();
    $post = App\Post::take(2)->latest('updated_at')->get();
    return $post;
});
