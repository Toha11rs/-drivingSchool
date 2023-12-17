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
        $user = Auth::user();
        $lessons = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->orderByDesc("start_time")
            ->get();

        $nearLesson = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->first();

        $lessonsGrade = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->where('assessment', 0)->get();

        $instructors = DrivingInstructors::all();

        return view("Instructor.main", [
            "lessons" => $lessons,
            "instructors" => $instructors,
            "nearLesson" => $nearLesson,
            "lessonsGrade" => $lessonsGrade
        ]);
    }

    public function DrivingLessonModal($LessonId)
    {
        $lesson = DrivingLessons::with("instructor")->where("id", $LessonId)->first();
        return view("Instructor.modal.DrivingLessonsInfo", [
            "lesson" => $lesson,
        ]);
    }

    public function instructorModal($instructorId)
    {
        $user = Auth::user();
        $instructor = DrivingInstructors::with('drivingCar')->find($instructorId);


        return view("Instructor.modal.InstructorInfo", [
            "instructor" => $instructor,
            "user" => $user,

        ]);
    }

    public function instructorModalStore(Request $request)
    {

        $dateString = $request->input('calendar');
        $carbonDate = Carbon::createFromFormat('d.m.Y H:i', $dateString);
        $formattedDate = $carbonDate->format('Y-m-d H:i:s');

        $user_id = $request->input('user_id');
        $instructor_id = $request->input('instructor_id');

        DrivingLessons::create([
            "user_id" => $user_id,
            "driving_instructor_id" => $instructor_id,
            "assessment" => 0,
            "start_time" => $formattedDate,
            "done" => false
        ]);

    }

    public function GradeLessonStore(Request $request)
    {

        $rating = $request->input('rating');
//        dd($rating);
        $lessonId = $request->input('LessonId');
        DrivingLessons::where("id", $lessonId)->update([
            "assessment" => $rating
        ]);
        return redirect()->back();
    }
}
