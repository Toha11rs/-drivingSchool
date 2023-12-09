<?php

namespace App\Console\Commands;

use App\Models\Questions;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class fixTopicCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fixTopic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i <= 26; $i++) {
            $question = Questions::where("topic_id",$i)->get();

                DB::table("topics")->where("id",$i)->update([
                    'count_questions' => count($question)
                ]);
        }
    }
}
