<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::query()->get();
    }
    public function indexx()
    {
        return Teacher::query()->with('courses')->get();
    }
}
