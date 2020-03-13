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
		"score" => $faker->randomNumber(2, true),
		"status_id" => $faker->randomNumber(2, true),
		"progress_id" => $faker->randomNumber(2, true),

    ];
});
