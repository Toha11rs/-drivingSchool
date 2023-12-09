<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $statistics = Statistics::where("user_id", $user->id)->get();
        $correctTicket = Statistics::where("user_id", $user->id)->where("is_correct", 1)->where("type", "ticket")->get();
        $IncorrectTicket = Statistics::where("user_id", $user->id)->where("is_correct", 0)->where("type", "ticket")->get();
        $allCorrect = Statistics::where("user_id", $user->id)->where("is_correct", 0)->get();
        $statisticsArray = [];
        $c = 0;
        $ic = 0;


//        dd($statisticsArray);
        return view("User.Profile", compact(
            "user",
            "statisticsArray",
            "allCorrect",
            "IncorrectTicket",
            "correctTicket",
            "statistics"
        ));
    }
}
//$statisticsArray["ticket"] = [
//    "correct"=>count($correctTicket),
//    "incorrect"=>count($IncorrectTicket),
//    "allCorrect"=>count($allCorrect)
//
//];
