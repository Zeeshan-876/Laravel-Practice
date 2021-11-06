<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('AddNewStudent',[StudentController::class,'store']);
Route::get('Students',[StudentController::class,'show']);
Route::delete('Delete-Student/{id}',[StudentController::class,'destroy']);
Route::get('edit-student/{id}',[StudentController::class,'edit']);
Route::put('update-student/{id}',[StudentController::class,'update']);