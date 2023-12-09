<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $fillable = [
        "user_id",
        "question_id",
        "is_correct",
        "type"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function questions()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }

    use HasFactory;
}
