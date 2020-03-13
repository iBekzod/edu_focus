<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Learningmethod Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Learningmethod::class, function (Faker $faker) {
    return [
		"name" => $faker->name,

    ];
});
