<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\User;
use App\Models\UserProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function MyLesson($topicId)
    {
        $userId = Auth::user()->id;
        $userProgress = UserProgress::where('user_id', $userId)->latest()->first();
        $lastProgress = $userProgress->lesson_number;

        if ($topicId > $lastProgress && $topicId != $lastProgress + 1) {
            return redirect()->route('MyLesson', ['TopicId' => $lastProgress+1]);
        }

        $allTopics = Topics::all();
        $theme = Topics::where("id", $topicId)->first();
        return view("Lesson.MyLesson", [
            "allTopics" => $allTopics,
            "topicId" => $topicId,
            "theme" => $theme["topic"],
            "lastProgress" => $lastProgress

        ]);
    }
}
