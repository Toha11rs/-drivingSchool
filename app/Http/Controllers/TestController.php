<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Topics;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        $questions = Questions::all();
        $topics = Topics::all();

        return view("test.main", compact("questions", "topics"));
    }

    //тренировка по билетам
    public function ticket()
    {

        return view("test.ticket");
    }
    //тренировка по темам
    public function topic($topicId)
    {
        $quetions = Questions::where("topic_id",$topicId)->get();
//        $quetions = response($quetions)->json;
        return view("test.topic",compact("quetions"));
    }
}
