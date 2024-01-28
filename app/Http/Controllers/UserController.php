<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use App\Models\Topics;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(UserServices $userServices)
    {
        $user = Auth::user();
        $presentTicket = $userServices->getPresentStatistic($user);



        return view("User.Profile", compact(
            "presentTicket",
            "user",
        ));
    }

    public function driving()
    {

        return view("User.Driving");
    }

    public function theory($topicId){
        $allTopics = Topics::all();
        $theme = Topics::where("id",$topicId)->first();
        return view("User.Theory",[
            "allTopics" => $allTopics,
            "topicId" =>$topicId,
            "theme" => $theme["topic"],
            ]);
    }

//    public function pdd(){
//        return view("User.Pdd");
//    }
}
