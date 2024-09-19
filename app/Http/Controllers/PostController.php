<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post1(){
        return view('post.post',['post'=>"hello world"]); // aca el valor que en enviare  
    }
}
