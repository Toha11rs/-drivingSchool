<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //тренировка по билетам
    public function index()
    {
        $questions = Questions::all();

        return view("test.main",compact("questions"));
    }


    public function ticket()
    {

        return view("test.ticket");
    }
}
