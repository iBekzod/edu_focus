<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Student Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
		"subject_interest" => '',
		"score" => $faker->randomNumber(),
		"status_id" => $faker->randomNumber(),
		"progress_id" => $faker->randomNumber(),

    ];
});
