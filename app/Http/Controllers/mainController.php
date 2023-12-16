<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function main(){
        $user = Auth::user();
        return view("main.home",compact("user"));
    }
}
