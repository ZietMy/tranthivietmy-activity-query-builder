<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function getAllPosts(){
        $posts=Post::all();
        return view('post',compact('posts'));
    }
    public function getOnePost($id){
        $post = Post::find($id);
        return view('post', compact('post'));
    }
    
}
