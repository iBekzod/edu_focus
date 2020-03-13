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
		"score" => '',
		"subject_id" => $faker->randomNumber(),

    ];
});
