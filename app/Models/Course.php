<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    Public function teacher(){

    $this->belongsTo(Teacher::class);

    }
    Public function courses(){

    $this->belongsToMany(Course::class);
    }
}
