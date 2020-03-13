<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Task Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
		"category" => '',
		"job_specification" => '',
		"type" => '',

    ];
});
