<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

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
    if (Auth::check()) {
        return redirect()->route('homepage');
    } else {
        return redirect()->route('beranda');
    }
});

Route::get('/home', function () {
    if (Auth::check()) {
        return redirect()->route('homepage');
    } else {
        return redirect()->route('beranda');
    }
});

Auth::routes(['verify' => true]);

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');

// LandingPageController
Route::get('/beranda', [App\Http\Controllers\LandingPageController::class, 'beranda'])->name('beranda');
Route::get('/profil', [App\Http\Controllers\LandingPageController::class, 'profil'])->name('profil');
Route::get('/kabinet', [App\Http\Controllers\LandingPageController::class, 'kabinet'])->name('kabinet');
Route::get('/statistik', [App\Http\Controllers\LandingPageController::class, 'statistik'])->name('statistik');
Route::get('/lapor', [App\Http\Controllers\LandingPageController::class, 'lapor'])->name('lapor');

// Post Routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Comment Routes
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

// Like Routes
Route::post('/posts/{post}/likes/toggle', [LikeController::class, 'toggle'])->name('likes.toggle');

// Show Routes
Route::get('/posts/{pejabat}', [PostController::class, 'show'])->name('posts.show');




// // Post Routes
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// // Comment Routes
// Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

// // Like Routes
// Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('likes.store');
// Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('likes.destroy');

