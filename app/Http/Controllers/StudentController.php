<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    Public function index(){
    return Student::query()->get();
}
    public function indexx(){

    return Student::query()->with('course')->get();
    }
}
