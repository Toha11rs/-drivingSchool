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

    public function ticketStore(Request $request,UserServices $userServices)
    {
        $user = Auth::user();
        $userServices->SaveTestResult($request,$user);

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
