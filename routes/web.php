<?php

namespace App\Models;

use App\Http\Controllers\FirstController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [FirstController::class, 'pri']);

Route::get('/post', [PostController::class, 'post1']);

Route::get('prueba', function () {

    // $post = new Post;
    // $post->title='titulo de test 1';
    // $post->content='aca hay contenido je';
    // $post->save();
    // return $post;


    // $post = Post::find(1);

    $post =
    return $post;
});
