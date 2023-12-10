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

    public function incstrucors()
    {
        return $this->hasMany(DrivingInstructors::class, 'driving_instructor_id');
    }
    use HasFactory;
}
