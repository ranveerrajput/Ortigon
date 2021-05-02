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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){

Route::get('/home', [App\Http\Controllers\PostController::class, 'allpost'])->name('home');

Route::get('/post/create',[App\Http\Controllers\PostController::class,'index'])->name('post.create')->middleware('auth');

Route::post('/post/store',[App\Http\Controllers\PostController::class,'store'])->name('post.store');

Route::get('/post/myposts',[App\Http\Controllers\PostController::class,'myposts'])->name('post.myposts');

Route::get('/post/delete/{post_id}',[App\Http\Controllers\PostController::class,'delete'])->name('post.delete');

Route::get('/post/edit/{post_id}',[App\Http\Controllers\PostController::class,'edit'])->name('post.edit');

Route::post('/post/update/{post_id}',[App\Http\Controllers\PostController::class,'update'])->name('post.update');

Route::get('/post/{id}',[App\Http\Controllers\PostController::class,'get'])->name('post.single');

Route::post('/comment/{id}',[App\Http\Controllers\CommmentController::class,'store'])->name('comment.store');

});

