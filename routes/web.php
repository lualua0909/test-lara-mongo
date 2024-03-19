<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $post = new Post;

    $post->title = "My first post";
    $post->body = "This is the body of my first post";
    $post->slug = "my-first-post";
    $post->save();

    return response()->json(["result" => $post], 201);
});
