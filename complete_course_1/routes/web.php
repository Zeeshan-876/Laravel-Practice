<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('home/{data}',[UserController::class,'show']);
// Route::get('myview/{content}',[UserController::class,'load_view']);
// Route::view('user','users');
// Route::view('about','about');
// Route::get('view1',[UserController::class,'myData']);
Route::post('users',[UserController::class,'getData']);
Route::view('login','form');