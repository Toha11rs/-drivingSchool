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
        $current_time = now();
        $user = Auth::user();
        $instructors = DrivingInstructors::all();

        $lessons = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->orderByDesc("start_time")
            ->where('done',0)
            ->get();

        $nearLesson = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->where('done',0)
            ->orderByDesc("start_time")
            ->first();



        $lessonsGrade = DrivingLessons::with('instructor')
            ->where('user_id', $user->id)
            ->where('assessment', 0)
            ->where('start_time', '<', $current_time)
            ->orderBy('start_time', 'DESC')
            ->get();



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
        $lessonId = $request->input('LessonId');
        DrivingLessons::where("id", $lessonId)->update([
            "assessment" => (int)$rating,
            "done"=>1
        ]);
        return redirect()->back();
    }
}
