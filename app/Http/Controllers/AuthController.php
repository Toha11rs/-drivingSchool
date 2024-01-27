<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{


    public function create()
    {
        return view("register");
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => "required|string",
            'email' => "required|string|email|unique:users,email",
            'password' => "required|confirmed|min:8",
        ]);
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);
        Auth::login($user);

        return redirect("Profile");
    }

    public function createLogin()
    {
        return view("User.login");
    }

    public function storeLogin(Request $request)
    {
        if (Auth::attempt($request->only("email", "password"))) {
            return redirect()->route("profile");
        } else {
            return redirect()->back();
        }


    }
}
