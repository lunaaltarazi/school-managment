<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    Public function User(){

    return $this->belongsTo(User::class);

    }

    public function Courses(){

    return $this->belongsToMany(Course::class);
    }
}
