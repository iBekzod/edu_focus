<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Job Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Job::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"category" => '',
		"picture" => '',
		"description" => $faker->realText(),
		"salary" => $faker->randomNumber(),

    ];
});
