<?php


namespace App\Services;


use App\Models\Questions;
use App\Models\Statistics;
use App\Models\Topics;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserServices
{
    public function getPresentStatistic($user)
    {
        $userId = $user->id;
        $topics = Topics::all();
        $result = [];


        $statistics = Statistics::where('user_id', $userId)->where("type", "topic")->with('questions.topics')->get();

        foreach ($topics as $topic) {
            $topicName = $topic->topic;
            $topicId = $topic->id;

            $questionCount = $topic->count_questions;


            $result[$topicName] = [
                'topic' => $topicName,
                'count' => $questionCount,
                'right_answer' => 0,
                'miss_answer' => 0
            ];

            foreach ($statistics as $statistic) {
                $question = $statistic->questions;
                if ($question->topics->id === $topicId) {
                    if ($statistic->is_correct) {
                        $result[$topicName]['right_answer']++;
                    } else {
                        $result[$topicName]['miss_answer']++;
                    }
                }
            }
        }
        $result = array_values($result);
        return $result;

    }

    public function GetColorUser($user)
    {
        $color_exam = [];
        for ($i = 1; $i < 41; $i++) {
            $colorUser = Statistics::where("user_id", $user->id)
                ->where("question_id", $i)
                ->where("type", "ticket")
                ->pluck("is_correct")
                ->first();
            if (isset($colorUser)) {
                if ($colorUser == 1) {
                    $color_exam[$i] = "green";
                } elseif ($colorUser == 0) {
                    $color_exam[$i] = "red";
                }
            } else {
                $color_exam[$i] = "gray";
            }
        }
        return $color_exam;
    }

    public function SaveTestResult($request,$user)
    {
        $incorrectAnswers = $request->input('correctAnswers');
        $result = json_decode($incorrectAnswers);

        $type = $result[0]->type;
        $userTopicStatistics = Statistics::where("user_id", $user->id)->where("type", "ticket")->first();

        if ($type == "ticket") {
            if (!$userTopicStatistics) {

                foreach ($result as $answer) {
                    Statistics::create([
                        "user_id" => $user->id,
                        "question_id" => $answer->question_id,
                        "is_correct" => $answer->is_correct,
                        "type" => $answer->type,
                    ]);
                }
            } else {
                DB::table("statistics")->where("user_id", $user->id)->update([
                    "is_correct" => $result[0]->is_correct,
                ]);
            }
        } elseif ($type == "topic") {
            foreach ($result as $answer) {
                $userTopicStatistics = Statistics::where("question_id", $answer->question_id)->where("type", "topic")->first();
                if (!$userTopicStatistics) {

                    Statistics::create([
                        "user_id" => $user->id,
                        "question_id" => $answer->question_id,
                        "is_correct" => $answer->is_correct,
                        "type" => $answer->type,
                    ]);
                }
                else{
                    DB::table("statistics")->where("question_id", $answer->question_id)
                        ->where("type", "topic")
                        ->update([
                            "is_correct" => $answer->is_correct,
                        ]);
                }
            }
        }
    }
}
