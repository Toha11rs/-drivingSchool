<?php

namespace App\Http\Controllers;

use App\Models\DrivingInstructors;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = DrivingInstructors::all();
        return view("Instructor.main",compact("instructors"));
    }

    public function instructorModal($instructorId){
        $instructor = DrivingInstructors::with('drivingCar')->find($instructorId);

        return view("Instructor.modal.InstructorInfo",[
            "instructor"=>$instructor
        ]);
    }

    public function instructorModalStore(Request $request){

    }
}
