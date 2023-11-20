<?php

namespace App\Console\Commands;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Topics;
use Illuminate\Console\Command;

class add_questionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add_questions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Обновление вопросов и ответов';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Questions::truncate();
        Answers::truncate();

        for ($i = 1; $i <= 40; $i++) {
//        $questions = json_decode(file_get_contents('C:\Users\AAAAA\Desktop\pdd_russia-master\questions\A_B\tickets\Билет $i.json)', true);
            $questions = json_decode(file_get_contents("C:\Users\AAAAA\Desktop\pdd_russia-master\questions\A_B\\tickets\Билет $i.json"), true);

            try {


                foreach ($questions as $question) {
                    foreach ($question["topic"] as $item) {


                        $questionModel = Questions::create([
                            'question_number' => (int)str_replace('Вопрос ', "", $question["title"]),
                            'ticket_number' => (int)str_replace('Билет ', "", $question["ticket_number"]),
                            'ticket_category' => $question["ticket_category"],
                            'image' => $question["image"],
                            'question' => $question["question"],
                            "answer_tip" => $question["answer_tip"],
                            "topic_id" => Topics::where("topic", $item)->pluck("id")->first()


                        ]);
                    }


                    foreach ($question["answers"] as $item) {

                        $answer = new Answers([
                            'answer' => $item["answer_text"],
                            'is_correct' => $item["is_correct"],
                        ]);
                        $questionModel->answers()->save($answer);
                    }


                }
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }
    }
}
