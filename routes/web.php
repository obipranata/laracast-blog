<?php
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminPostController;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comment', [PostCommentController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// admin
Route::middleware('can:admin')->group(function(){
  Route::resource('admin/posts', AdminPostController::class)->except('show');
  // Route::post('admin/posts', [AdminPostController::class, 'store']);
  // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
  // Route::get('admin/posts', [AdminPostController::class, 'index']);
  // Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
  // Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
  // Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
});
