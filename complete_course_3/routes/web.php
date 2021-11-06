<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \Illuminate\Support\Facades\App;


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
// Route::get('/login',function(){
//     if(session()->has('username')){
//         return redirect('user_profile');
//     };
//     return view('login');
// });
// Route::view('user_profile','profile');
// Route::view('login','login');

// Route::get('logout',function(){
//     if(session()->has('username')){
//         session()->pull('username',null);
//     };
//     return redirect('login');
// });


// Route::post('login_user',[LoginController::class,'login_user']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('store','storeuser');
// Route::post('storeController',[LoginController::class,'StoreMember']);


//Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('profile/{language}',function($language){
//     App::setLocale($language);
//     return view('profile');
// });

// Route::get('users',[UserController::class,'index']);

// Route::get('member',[UserController::class,'display_members']);

Route::view('/','welcome');
Route::view('form','insert_member');
Route::post('insert',[UserController::class,'insertMember']);
Route::get('member_list',[UserController::class,'show_members']);
Route::get('delete/{id}',[UserController::class,'delete_member']);
Route::get('edit/{id}',[UserController::class,'edit_member']);
Route::post('edit/update/{id}',[UserController::class,'update_member']);