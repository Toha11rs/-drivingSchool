<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Statistics;
use App\Models\Topics;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function index(UserServices $userServices)
    {
        $user = Auth::user();
        $topics = Topics::all();
        $color_exam = $userServices->GetColorUser($user);


        return view("test.main", compact(
            "topics",
            "color_exam"
        ));
    }

    //тренировка по билетам
    public function ticket()
    {
        return view("test.ticket");
    }

    public function ticketStore(Request $request)
    {

        $incorrectAnswers = $request->input('correctAnswers');
        $result = json_decode($incorrectAnswers);
        $user = Auth::user();
        foreach ($result as $answer){

            Statistics::create([
               "user_id"=>$user->id,
               "question_id" => $answer->question_id,
                "is_correct"=>$answer->is_correct,
                "type"=>$answer->type,

            ]);
        }
        return redirect()->back();
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
