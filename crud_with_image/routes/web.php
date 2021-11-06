<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\genderController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\studentController;

// Gender Module

Route::get('gender_list',[genderController::class,'showGenders']);
Route::get('add-gender',[genderController::class,'create']);
Route::post('genders',[genderController::class,'addGenders']);
Route::get('delete_gender/{id}',[genderController::class,'deleteGender']);
Route::get('edit_gender/{id}',[genderController::class,'fetchGender']);
Route::post('edit_gender/update_gender/{id}',[genderController::class,'updateGender']);


//Course Module

Route::get('add-course',[courseController::class,'create']);
Route::get('course-list',[courseController::class,'showCourses']);
Route::post('courses',[courseController::class,'addCourse']);
Route::get('delete_course/{id}',[courseController::class,'deleteCourse']);
Route::get('edit_course/{id}',[courseController::class,'fetchCourse']);
Route::post('edit_course/update_course/{id}',[courseController::class,'updateCourse']);


//City Module

Route::get('city-list',[cityController::class,'getCity']);
Route::get('city-form',[cityController::class,'create']);
Route::post('cities',[cityController::class,'addCity']);
Route::get('delete_city/{id}',[cityController::class,'deleteCity']);
Route::get('edit_City/{id}',[cityController::class,'editCity']);
Route::post('edit_City/update_City/{id}',[cityController::class,'updateCity']);


//Student Module

Route::get('/',[studentController::class,'show']);
Route::get('student-form',[studentController::class,'displayOtherData']);
Route::post('add-student',[studentController::class,'storeStudent']);
Route::get('delete_student/{id}',[studentController::class,'destroy']);
Route::get('edit_student/{id}',[studentController::class,'edit']);
Route::put('edit_student/update_student/{id}',[studentController::class,'update']);