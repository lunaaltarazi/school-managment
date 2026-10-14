<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
        Public function index(){
    return Teacher::query()->get();
}
     Public function indexx(){
        return Teacher::query()->with('courses')->get();
     }
     
}
