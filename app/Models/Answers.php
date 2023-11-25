<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{

    protected $fillable = ["answer", "is_correct", "question_id"];
    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Questions::class, "question_id");
    }

    public function getRusAnswersAttribute()
    {
        return [
            'answer' => $this->answer,
            'is_correct' => $this->is_correct,
        ];
    }

    use HasFactory;
}
