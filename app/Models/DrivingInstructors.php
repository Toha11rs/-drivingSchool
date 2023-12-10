<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingInstructors extends Model
{

    protected $fillable = [
        "name",
        "email",
        "telegram",
        "phone",
        "category",
        "experience",
        "car_id"
    ];


    public function driving_car()
    {
        return $this->hasMany(CarInstructors::class, 'car_id');
    }
    use HasFactory;
}
