<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');









Route::prefix('teachers')->group(function(){
Route::get('/',[TeacherController::class,'index']);
Route::get('/x',[TeacherController::class,'indexx']);

});
Route::prefix('students')->group(function(){
Route::get('/',[StudentController::class,'index']);
Route::get('/x',[StudentController::class,'indexx']);

});

Route::get('courses',[CourseController::class,'store']);
