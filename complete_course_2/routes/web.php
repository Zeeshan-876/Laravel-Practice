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




// GROUP MIDDLEWARE 
//Route::view('noaccess','noaccess');
// Route::view('home','home');
// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view('user','user');
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

// ROUTE MIDDLE WARE
//Route::get('/', function () {
//        return view('welcome');
// });
// Route::view('user','user')->middleware('protectPage');
// Route::view('home','home');
// Route::view('noaccess','noaccess');


// Route::get('/', function () {
//        return view('welcome');
// });

// Route::view('noaccess','noaccess');
// Route::group(['middleware'=>['securePage']],function(){
//        Route::view('user','user');
//        Route::view('home','home');
// });


// Route::get('/', function () {
//        return view('welcome');
// });

// Route::view('user','user')->middleware('singlesecurepage');
// Route::view('home','home');
// Route::view('noaccess','noaccess');


// API Route::get('/', function () {
//        return view('welcome');
// });

// Route::get('users',[UserController::class,'index']);


// HTTP REQUESTS 
//Route::get('/', function () {
//       return view('welcome');
// });
// Route::put('users',[UserController::class,'test_data']);
// Route::delete('users',[UserController::class,'test_data']);
// Route::View('login','user_login');

Route::get('/', function () {
       return view('welcome');
});
// Route::view('login','login_session');
// Route::view('profile','profile');
// Route::view('noaccess','noaccess');
Route::get('/logout', function () {
       if(session()->has('user')){
              session()->pull('user',null);
       }
       return redirect('login');
});
Route::get('/profile', function () {
       if(session()->missing('user')){
              return redirect('login');
       }
       return view('profile');
});
Route::get('/home', function () {
       if(session()->missing('user')){
              return redirect('login');
       }
       return view('home');
});

Route::get('/login', function () {
       if(session()->has('user')){
              return redirect('profile');
       }
      return view('login_session');
});
Route::post('insert',[UserController::class,'userLogin']);