<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentSyncRequest;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store($id)
    {
        $teacher = Teacher::query()->where('id', $id)->with('user')->get();
        $teacher->courses()->creatMany(
            [
                "name" => 'laravel',
                "teacher_id" => 1
            ],
            [

                "name" => 'sql',
                "teacher_id" => 2

            ]

        );
    }
    public function attachhh(StudentSyncRequest $request)
    {
        $course = Course::query()->find(1);
        $course->students()->attach(
            $request->students

        );
    }
}
