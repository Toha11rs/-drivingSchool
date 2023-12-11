<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
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
}
