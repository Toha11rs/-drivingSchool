<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInstructors extends Model
{

    protected $fillable = [
        "brand",
        "color",
        "number",
        "type",

    ];
    use HasFactory;


    public function instructor()
    {
        return $this->hasOne(DrivingInstructors::class);
    }
}
