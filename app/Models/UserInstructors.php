<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInstructors extends Model
{
    protected $fillable = [
        "user_id",
        "driving_instructor_id",
        ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function incstrucors()
    {
        return $this->hasMany(DrivingInstructors::class, 'driving_instructor_id');
    }
    use HasFactory;
}
