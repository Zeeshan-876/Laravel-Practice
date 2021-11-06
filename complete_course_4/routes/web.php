<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\loginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('form','form');
// Route::post('insert_post',[postController::class,'insert_Record']);
// Route::get('view_record',[postController::class,'display_record']);
// Route::get('delete/{id}',[postController::class,'delete_post']);
// Route::get('edit/{id}',[postController::class,'edit_post']);
// Route::post('edit/update/{id}',[postController::class,'update_post']);


// Route::get('joins_record',[postController::class,'view_joins_data']);


// Route::group(['middleware'=>['checkAge']],function(){
//     Route::view('users','Middlewares_practice.user');
//     Route::view('homes','Middlewares_practice.home');
// });

// Route::view('users','Middlewares_practice.user');
// Route::view('homes','Middlewares_practice.home')->middleware('age');

// Route::view('noaccess','Middlewares_practice.noaccess');
// Route::view('about','Middlewares_practice.about');

// Route::view('/','welcome');
// Route::get('login_form',[postController::class,'users']);
// Route::get('profile',[postController::class,'profile']);
// Route::post('login',[postController::class,'login_user']);
// Route::get('logout',function(){
//     if(session()->has('user')){
//         session()->pull('user',null);
//     }
//     return redirect('login_form');
// });
// Route::get('login_form',function(){
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('Session_practice.login');
// });


// Route::view('/','welcome');
// Route::view('profile','Session_practice2.profile');
// Route::get('logout',function(){
//     if(session()->has('user')){
//         session()->pull('user',null);
//     }
//     return redirect('form');
// });
// // Route::view('form','Session_practice2.login');
// Route::get('form',function(){
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('Session_practice2.login');
// });
// Route::post('login',[loginController::class,'loginUser']);


Route::view('/','welcome');
Route::view('profile','Session_practice3.profile');
Route::post('login',[loginController::class,'loginUser']);
Route::get('logout',function(){
     if(session()->has('user')){
          session()->pull('user',null);
     }
     return redirect('form');
});
Route::get('form',function(){
     if(session()->has('user')){
          return redirect('profile');
     }
     return view('Session_practice3.login');
});