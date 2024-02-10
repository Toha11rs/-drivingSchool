<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    protected $fillable = [
        "lesson_number",
    ];


    protected $table = "user_progress";
    use HasFactory;
}
