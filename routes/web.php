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

    // CREAR REGISTRO
    $post = new Post;
    $post->title='titulo de tPRUEBA test 1';
    $post->content='aca hay contenido je';
    $post->save();
    return $post;


    //ACTUALIZAR REGISTRO
    // $post = Post::find(1);
    // $post = Post::where('id','1')->first();
    // $post->title= 'yo soy el post1 debo ser distinto';
    // $post->save();
    // return $post;


    // $post = Post::where('id','>=','2')->get();
    // return $post;

    // $post = Post::find(1);
    // $post->delete();
    // return "eliminado eficientemente";



});
