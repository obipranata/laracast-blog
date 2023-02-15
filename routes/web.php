<?php
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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

Route::get('/', function () {

    // $files = File::files(resource_path("posts/"));

    $posts = Post::latest('id')->with('category', 'author')->get();

    // $posts = array_map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // }, $files);

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('/post/{post:slug}', function(Post $post){
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view ('posts', [
        'posts' => $category->posts->load(['category', 'author'])
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view ('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});
