<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class multiple_commands extends Command
{
    protected $signature = 'execute:commands';

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
        $tabels=["jobs", 'statuses', 'students', 'learningmethods', 'organizations', 'parents', 'professors', 'progress'
        ,'roles', 'scores', 'subjects', 'tasks'];

        foreach ($tabels as $tabel){
            Artisan::call('laracrud:mvc', [
                'table'=>$tabel
            ]);
        }
        /*$models=['Job', 'Award', 'Message', 'Photo', 'Service', 'Partner', 'Status', 'Employer', 'Staff',
            'Link', 'Feedback', 'Skill', 'Person', 'Project', 'SocialLink','ProjectStatus','Customer',
            'Company', 'Student', 'Education', 'WorkExperience', 'Blog', 'Jurist', 'Membership', 'Comment',
            'Teacher', 'Training', 'Faq', 'Course'];
        foreach ($models as $model){
            Artisan::call('laracrud:factory', [
                'model'=>$model
            ]);
        }*/
        //Controller
        /*$models=['Job', 'Award', 'Message', 'Photo', 'Service', 'Partner', 'Status', 'Employer', 'Staff',
            'Link', 'Feedback', 'Skill', 'Person', 'Project', 'SocialLink','ProjectStatus','Customer',
            'Company', 'Student', 'Education', 'WorkExperience', 'Blog', 'Jurist', 'Membership', 'Comment',
            'Teacher', 'Training', 'Faq', 'Course'];
        foreach ($models as $model){
            Artisan::call('make:controller '.$model.'Controller --resource ');
        }*/
        //Route
        /*$models=['Job', 'Award', 'Message', 'Photo', 'Service', 'Partner', 'Status', 'Employer', 'Staff',
            'Link', 'Feedback', 'Skill', 'Person', 'Project', 'SocialLink','ProjectStatus','Customer',
            'Company', 'Student', 'Education', 'WorkExperience', 'Blog', 'Jurist', 'Membership', 'Comment',
            'Teacher', 'Training', 'Faq', 'Course'];
        foreach ($models as $model){
            Artisan::call('laracrud:route '.$model.'Controller');
        }*/
    }
}
