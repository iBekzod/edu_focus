<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
class multiple_commands extends Command
{
    protected $signature = 'execute:mvc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My special crud command at once';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /*
        $tabels=['users', 'jobs', 'statuses', 'students', 'learningmethods', 'organizations', 'studentparents', 'professors', 'progress'
        ,'roles', 'scores', 'subjects', 'tasks'];
        */
        /*foreach ($tabels as $tabel){
            Artisan::call('laracrud:mvc', [
                'table'=>$tabel
            ]);
        }*/
        //Route
        $models=['User', 'Job', 'Status', 'Student', 'Learningmethod', 'Organization', 'Studentparent', 'Professor', 'Progress'
            ,'Role', 'Score', 'Subject', 'Task'];
        /*foreach ($models as $model){
            Artisan::call('laracrud:route '.$model.'Controller');
        }*/
        foreach ($models as $model){
            Artisan::call('laracrud:factory '.$model);
        }
    }
}
