<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
