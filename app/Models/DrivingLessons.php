<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingLessons extends Model
{

    protected $fillable = [
        "user_id",
        "driving_instructor_id",
        "assessment",
        "start_time",
        "done"
    ];

    public function instructor()
    {
        return $this->belongsTo(DrivingInstructors::class, 'driving_instructor_id');
    }

//    public function getLastLessonsAttribute()
//    {
//        return $this->start_time->orderByDesc("created_at")->get();
//    }

    use HasFactory;
}
