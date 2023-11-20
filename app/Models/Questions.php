<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Answers;

class Questions extends Model
{
    protected $fillable = ["question_number", "ticket_number", "ticket_category", "image", "question", "answer_tip","topic_id"];
    public $timestamps = false;
    public function answers()
    {
        return $this->hasMany(Answers::class,'question_id');
    }

    public function topics()
    {
        return $this->belongsTo(Questions::class);
    }
    use HasFactory;
}
