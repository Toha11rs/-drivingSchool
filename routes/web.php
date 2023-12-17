<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\InstructorController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\mainController;


Route::get("/", [mainController::class, "main"])->name("main");
Route::get("/register", [AuthController::class, "create"])->name("register");
Route::post("/register", [AuthController::class, "store"])->name("register");
Route::get("/login", [AuthController::class, "createLogin"])->name("login");
Route::post("/login", [AuthController::class, "storeLogin"]);

Route::prefix("profile")->middleware('auth')->group(function () {
    Route::get("", [UserController::class, "index"])->name("profile");
    Route::get("theory", [UserController::class, "theory"])->name("theory");
    Route::get("pdd", [UserController::class, "pdd"])->name("pdd");

    Route::get("driving", [InstructorController::class, "index"])->name("driving");
    Route::get("instructorInfo/{instructorId}", [InstructorController::class, "instructorModal"])->name("instructorModal");
    Route::post("instructorInfo/{instructorId}", [InstructorController::class, "instructorModalStore"])->name("instructorModalStore");

});

Route::prefix("test")->middleware('auth')->group(function () {
    Route::get("", [TestController::class, "index"])->name("index");

    Route::get("/ticket/{ticketId}", [TestController::class, "ticket"])->name("ticket");
    Route::post("/ticket/", [TestController::class, "ticketStore"])->name("ticketStore");

    Route::get("/topic/{topicId}", [TestController::class, "topic"])->name("topic");
    Route::get("/exam", [TestController::class, "exam"])->name("exam");
});

//Route::get("AdminProfile",[InstrucorController::class,"index"])->name("index");

//Route::get('test1', function () {
//    $answers = Answers::pluck('question_id')->unique()->sort();
//
//    $missingIds = [];
//    for ($i = 1; $i <= 819; $i++) {
//        if (!$answers->contains($i)) {
//            $missingIds[] = $i;
//        }
//    }
//
//    // Теперь $missingIds содержит пропущенные question_id
//    dd($missingIds);

Route::get('test1', function () {
});



