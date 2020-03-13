<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Progress Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Progress::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"score" => $faker->randomNumber(2, true),
		"subject_id" => $faker->randomNumber(2, true),

    ];
});
