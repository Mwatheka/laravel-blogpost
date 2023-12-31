<?php

use Illuminate\Support\Facades\Route;

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

// Predefined root route - Shows the welcome page we show when we ran the app for the first time.
Route::get('/', function () {
    return view('welcome');
});

// The route we have created to show all blog posts.
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']); // shows create post form
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']); // saves the created post to the database
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); // shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); // commits edited post to the database
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); // deletes post from the database

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
