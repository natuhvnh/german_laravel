<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller {
  public function show($post) {
    // $posts = [
    //     'my-first-post' => 'Hello, this is my first post',
    //     'my-second-post' => 'Hello, this is my second post'
    // ];
    // $slug = Post::where('slug', $post)->firstOrFail();  //firstOrFail == if (! $slug) {abort(404)}
    $slug = Post::find($post);
    // dd($slug);
    return $slug; 
  }
}

// class PostsController {
//   public function show($post) {
//     // $posts = [
//     //     'my-first-post' => 'Hello, this is my first post',
//     //     'my-second-post' => 'Hello, this is my second post'
//     // ];
//     $slug = DB::table('posts')->where('slug', $post)->first();
//     if (! $slug) {
//       abort(404);
//     }
//     // dd($slug);
//     return $slug->body; 
//   }
// }