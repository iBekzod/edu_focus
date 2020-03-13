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
		"category" => 'sdfsdfhh',
		"picture" => 'sdfdfh',
		"description" => $faker->realText(),
		"salary" => $faker->randomNumber(2, true),

    ];
});
