<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDDController extends Controller
{
    public function septInfo()
    {
        return view("PDD.septInfo");
    }
}
