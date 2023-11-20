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
        return $this->belongsTo(Questions::class);
    }

    use HasFactory;
}
