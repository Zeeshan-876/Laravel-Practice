<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
Route::view('/','crud.welcome');
Route::get('get-data',[userController::class,'getData']);
Route::get('Delete/{id}',[userController::class,'Delete']);
Route::get('Update/{id}',[userController::class,'Update']);
Route::get('insert-Record',[userController::class,'index']);
Route::post('Add_Record',[userController::class,'Add_Record']);
// Route::get('get-data',[userController::class,'getData']);