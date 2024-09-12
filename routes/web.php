<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\DB;
use carbon\Carbon;
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
    return view('welcome');
});


Route::get('/about/{name}/{gender}',function($name,$gender){
    return view('about',compact('name','gender'));
});

// Route::get('/create',[PostController::class, 'create']);

// Route::post('/posts',[PostController::class, 'store'] );

// Route::get('/posts',[PostController::class, 'index']);

// Route::get('/posts/{id}',[PostController::class, 'show'] );

Route::resource('posts', PostController::class);