<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

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

Route::get('home', [HomeController::class, 'index']);

Route::post('add-customer',[CustomerController::class,'store']);

Route::get('contact-form',[ContactController::class,'create']);
Route::post('add-contact',[ContactController::class,'store']);

Route::get('category-form',[CategoryController::class,'create']);
Route::post('add-category',[CategoryController::class,'store']);

Route::get('user-profile',[UserController::class,'index']);
Route::get('course-form',[CourseController::class,'index']);
Route::post('add-courses',[CourseController::class,'store']);


Route::get('user/profile/{profile_id}',[UserController::class,'profile']);
