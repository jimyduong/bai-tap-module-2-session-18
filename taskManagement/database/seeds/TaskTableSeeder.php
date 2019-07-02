<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            $task = new Task();
            $task->title            = "Công việc ". str_random(1,10);
            $task->content          = "Nội dung công việc ".str_random(1,10);
            $task->image            = "";
            $task->due_date         = "2019-07-".mt_rand(1,20);
            $task->save();
        }
    }
}
