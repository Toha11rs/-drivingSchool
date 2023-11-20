<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;

use \App\Models\Questions;
use \App\Models\Answers;
use \App\Models\Topics;



Route::get("/register",[AuthController::class,"create"])->name("register");
Route::post("/register",[AuthController::class,"store"])->name("register");

Route::get("/login",[AuthController::class,"createLogin"])->name("login");
Route::post("/login",[AuthController::class,"storeLogin"]);


Route::get("/profile",[UserController::class,"index"])->name("Profile")->middleware('auth');;

Route::prefix("test")->group(function (){
    Route::get("/ticket/{ticketId}",[TestController::class,"ticket"])->name("ticket");
    Route::get("main",[TestController::class,"index"])->name("index");
});




Route::get('test', function () {



});
