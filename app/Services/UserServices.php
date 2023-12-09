<?php


namespace App\Services;


use App\Models\User;

class UserServices
{
    public function getPresentStatistic($statistics){
        foreach ($statistics as $statistic){
            $topic = $statistic->questions->topics->topic;
        }

        $result = [];

        $result[] = ["topic"=>$topic,];

        return $result;

    }
}
