<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Statistics;
use App\Models\Topics;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $type = $result[0]->type;
        $userTopicStatistics = Statistics::where("user_id", $user->id)->where("type", "ticket")->first();

        if ($type == "ticket") {
            if (!$userTopicStatistics) {

                foreach ($result as $answer) {
                    Statistics::create([
                        "user_id" => $user->id,
                        "question_id" => $answer->question_id,
                        "is_correct" => $answer->is_correct,
                        "type" => $answer->type,
                    ]);
                }
            } else {
                DB::table("statistics")->where("user_id", $user->id)->update([
                    "is_correct" => $result[0]->is_correct,
                ]);
            }
        } elseif ($type == "topic") {
            foreach ($result as $answer) {
                $userTopicStatistics = Statistics::where("question_id", $answer->question_id)->where("type", "topic")->first();
                if (!$userTopicStatistics) {

                    Statistics::create([
                        "user_id" => $user->id,
                        "question_id" => $answer->question_id,
                        "is_correct" => $answer->is_correct,
                        "type" => $answer->type,
                    ]);
                }
                else{
                    DB::table("statistics")->where("question_id", $answer->question_id)
                        ->where("type", "topic")
                        ->update([
                        "is_correct" => $result[0]->is_correct,
                    ]);
                }
            }
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
