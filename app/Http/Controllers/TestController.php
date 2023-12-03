<?php

namespace App\Http\Controllers;

use App\Models\Answers;
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

    public function ticketStore(Request $request)
    {
        $requestData = $request->all();



        $incorrectAnswers = $request->input('incorrectAnswers');


       $result  =["CountCorrectAnswers"=>count(json_decode($incorrectAnswers)),"CountIncorrectAnswers"=>(json_decode($incorrectAnswers))];
        $CountIncorrectAnswers = $result["CountIncorrectAnswers"];
        dd(json_decode($incorrectAnswers));
        return $result;
    }

    public function exam()
    {
        return view("test.exam");
    }

    //тренировка по темам
    public function topic($topicId)
    {
        $questions = Questions::with('answers')->where("topic_id", $topicId)->get();

        return view("test.topic", compact("questions", "topicId"));
    }
}
