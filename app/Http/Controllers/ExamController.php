<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Topics;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function ExaminationTicket($number)
    {
        $questions = Questions::where("ticket_number", $number)->with('answers')->get();
        return response()->json($questions);
    }

    public function Topics()
    {
        $topics = Topics::all();
        return response()->json($topics);
    }

    public function tickets()
    {
        $tickets = Questions::with('answers')->get();
        return response()->json($tickets);
    }

    public function Topic($number)
    {
        $topic = Questions::where("topic_id",$number)->with('answers')->get();
        return response()->json($topic);
    }


}
