<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    Public function Store($id){
    $teacher=Teacher::query()->where('id',$id)->with('user')->get();
    $teacher->courses()->creatMany([
        "name"=>'laravel',
        "teacher_id"=>1
    ]);
}
}
