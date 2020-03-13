<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Score Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Score::class, function (Faker $faker) {
    return [
		"student_id" => $faker->randomNumber(2, true),
		"scores" => $faker->randomNumber(2, true),
		"subject_id" => $faker->randomNumber(2, true),

    ];
});
