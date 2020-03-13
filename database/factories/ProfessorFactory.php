<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Professor Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Professor::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"email" => $faker->safeEmail,

    ];
});
