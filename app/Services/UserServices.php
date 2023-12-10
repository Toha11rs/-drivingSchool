<?php


namespace App\Services;


use App\Models\Questions;
use App\Models\Statistics;
use App\Models\Topics;
use App\Models\User;

class UserServices
{
    public function getPresentStatistic($user){
        $userId = $user->id;
        $topics = Topics::all();
        $result = [];


        $statistics = Statistics::where('user_id', $userId)->where("type","ticket")->with('questions.topics')->get();

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

    public function GetColorUser($user){

        $color_exam = [];
        for ($i = 1; $i < 41; $i++) {
            $colorUser = Statistics::where("user_id", $user->id)
                ->where("question_id", $i)
                ->pluck("is_correct")
                ->first();
            if(isset($colorUser)){
                if ($colorUser == 1) {
                    $color_exam[$i] = "green";
                } elseif ($colorUser == 0) {
                    $color_exam[$i] = "red";
                }
            } else {
                $color_exam[$i] = "#bbbbbb";
            }
        }
        return $color_exam;
    }
}
