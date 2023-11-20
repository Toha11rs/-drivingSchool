<?php

use App\Http\Controllers\ExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get("ticket/{number}", [ExamController::class, "ExaminationTicket"]);
Route::get("topic/{number}", [ExamController::class, "Topic"]);
Route::get("topics",[ExamController::class, "topics"]);
Route::get("tickets",[ExamController::class, "tickets"]);


