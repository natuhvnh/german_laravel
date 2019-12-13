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

Route::get('/cards', function() {
    // $post = App\Post::all();
    $cards = App\card::all();
    // dd($cards);
    return $cards;
});

Route::get('/services', function() {
    // $post = App\Post::all();
    $services = App\service::all();
    // dd($cards);
    return $services;
});

//like cards, services but put App/card:all in index function in introController
Route::get('/intros', 'introController@index');     
Route::post('/intros', 'introController@store');
Route::get('/intros/create', 'introController@create'); //create come before show and return a view for create
Route::get('/intros/{intro}', 'introController@show');    
Route::get('/intros/{intro}/edit', 'introController@edit'); //return a view for edit    
Route::put('/intros/{intro}', 'introController@update');
Route::delete('/intros/{intro}', 'introController@destroy');    



