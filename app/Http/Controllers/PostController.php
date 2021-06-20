<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::latest()->paginate();

        return view('index',[ 'post' =>$post]);
    }
}
