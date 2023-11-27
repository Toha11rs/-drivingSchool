<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $fillable = ["topic"];



    public function topics()
    {
        return $this->hasMany(Topics::class, 'topics_id');
    }

    public $timestamps = false;
    use HasFactory;
}



//Topics::truncate();
//
//$folderPath = "C:\Users\AAAAA\Desktop\pdd_russia-master\questions\A_B\\topics";
//$files = scandir($folderPath);
//
//foreach ($files as $filename) {
//    if ($filename !== '.' && $filename !== '..') {
//        $fileInfo = pathinfo($filename);
//
//        // Проверяем, что файл имеет расширение .json
//        if (isset($fileInfo['extension']) && strtolower($fileInfo['extension']) === 'json') {
//            $newFilename = $fileInfo['filename']; // Получаем имя файла без расширения
//            Topics::create([
//                "topic"=> $newFilename
//            ]);
//        }
//    }
//}
