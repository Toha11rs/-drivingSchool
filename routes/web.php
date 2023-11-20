<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ExamController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;

use \App\Models\Questions;
use \App\Models\Answers;
use \App\Models\Topics;

Route::get("ticket/{number}", [ExamController::class, "ExaminationTicket"])->name("ExaminationTicket");
Route::get("topic/{number}", [ExamController::class, "Topic"])->name("Topic");
Route::get("topics",[ExamController::class, "topics"])->name("topics");
Route::get("tickets",[ExamController::class, "tickets"])->name("topics");

Route::get("/register",[AuthController::class,"create"])->name("register");
Route::post("/register",[AuthController::class,"store"])->name("register");

Route::get("/login",[AuthController::class,"createLogin"])->name("login");
Route::post("/login",[AuthController::class,"storeLogin"]);


Route::get("/profile",[UserController::class,"index"])->name("Profile")->middleware('auth');;



Route::get('test', function () {



});
