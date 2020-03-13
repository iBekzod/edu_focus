<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Status Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Status::class, function (Faker $faker) {
    return [
		"name" => $faker->name,

    ];
});
