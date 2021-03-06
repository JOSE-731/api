<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::latest()->paginate(9);
    
        return view('index',[ 'post' =>$post]);
    }
}
