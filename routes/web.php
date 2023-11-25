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
    Route::get("",[TestController::class,"index"])->name("index");
    Route::get("/ticket/{ticketId}",[TestController::class,"ticket"])->name("ticket");
    Route::get("/topic/{topicId}",[TestController::class,"topic"])->name("topic");
    Route::get("/exam",[TestController::class,"exam"])->name("exam");


});





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
    $answers = Questions::all();

   foreach ($answers as $answer){
       $img = $answer->image;
       $update = substr($img, 1);
       $answer->update([
          "image"=>$update
       ]);
   }

});



