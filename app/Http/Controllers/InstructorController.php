<?php

namespace App\Http\Controllers;

use App\Models\DrivingInstructors;
use App\Models\DrivingLessons;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = DrivingInstructors::all();
        return view("Instructor.main",compact("instructors"));
    }

    public function instructorModal($instructorId){
        $user = Auth::user();
        $instructor = DrivingInstructors::with('drivingCar')->find($instructorId);

        return view("Instructor.modal.InstructorInfo",[
            "instructor"=>$instructor,
            "user"=>$user,
        ]);
    }

    public function instructorModalStore(Request $request){

        $dateString = $request->input('calendar');
        $carbonDate = Carbon::createFromFormat('d.m.Y H:i', $dateString);

        // Форматируем дату в нужный вид
        $formattedDate = $carbonDate->format('Y-m-d H:i:s');

        $user_id = $request->input('user_id');
        $instructor_id = $request->input('instructor_id');

        DrivingLessons::create([
            "user_id"=>$user_id,
            "driving_instructor_id"=>$instructor_id,
            "assessment"=>0,
            "start_time"=>$formattedDate,
            "done"=>false
        ]);

    }
}
