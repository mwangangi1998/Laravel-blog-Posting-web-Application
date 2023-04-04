<?php

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

Route::get('/', function () {
    $heading="Welcome to blogging";
    return view('index',compact('heading'));
});

Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);
