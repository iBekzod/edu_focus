<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\Job::class, 50)->create();
        factory(App\Models\Learningmethod::class, 50)->create();
        factory(App\Models\Organization::class, 50)->create();
        factory(App\Models\Professor::class, 50)->create();
        factory(App\Models\Progress::class, 50)->create();
        factory(App\Models\Role::class, 50)->create();
        factory(App\Models\Score::class, 50)->create();
        factory(App\Models\Status::class, 50)->create();
        factory(App\Models\Student::class, 50)->create();
        factory(App\Models\Studentparent::class, 50)->create();
        factory(App\Models\Subject::class, 50)->create();
        factory(App\Models\Task::class, 50)->create();
        factory(App\Models\User::class, 50)->create();
    }
}
