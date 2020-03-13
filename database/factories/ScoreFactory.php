<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Score Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Score::class, function (Faker $faker) {
    return [
		"student_id" => $faker->randomNumber(),
		"scores" => '',
		"subject_id" => $faker->randomNumber(),

    ];
});
