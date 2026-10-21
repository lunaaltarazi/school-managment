<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');









Route::prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/x', [TeacherController::class, 'indexx']);
});
Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/x', [StudentController::class, 'indexx']);
});

Route::get('courses', [CourseController::class, 'store']);
Route::post('courses', [CourseController::class, 'attachhh']);


Route::get('/create', function () {

    $user = User::query()->create([

        "name" => 'name',
        "email" => 'hhgg dvdvcvcvhhh',
        "password" => 'password'

    ]);

    $teacher = Teacher::query()->create([

        "user_id" => $user->id

    ]);
    $course=Course::query()->create([

        "name" => 'name',
        "teacher_id" => $teacher->id

    ]);
});
