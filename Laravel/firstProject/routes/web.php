<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
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

Route::get('login', [App\Http\Controllers\UserController::class,'loginForm']); 

Route::post('login',[App\Http\Controllers\UserController::class,'checkLogin']);

Route::get('order/create',[App\Http\Controllers\OrderController::class,'insert']);

 Route::get('orders',[App\Http\Controllers\OrderController::class,'fetch']);