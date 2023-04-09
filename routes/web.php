<?php

use App\Http\Controllers\postsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class,'home']);


Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);
// Route::resource('posts','postsController');
Route::get('/posts',[postsController::class,'index']);
Route::get('post/{id}',[postsController::class,'show']);

Route::get('create',[postsController::class,'create']);
Route::post('store/',[postsController::class,'store']);

// edit post
Route::get('edit/{id}',[postsController::class,'edit']);
Route::post('update/',[postsController::class,'update']);


// deleting post
Route::get('delete/{id}',[postsController::class,'destroy']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
