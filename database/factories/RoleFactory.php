<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Role Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Role::class, function (Faker $faker) {
    return [
		"name" => $faker->name,

    ];
});
