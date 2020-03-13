<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Subject Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Subject::class, function (Faker $faker) {
    return [
		"category" => '',
		"name" => $faker->name,
		"photo" => $faker->imageUrl(),
		"ISBN" => '',

    ];
});
