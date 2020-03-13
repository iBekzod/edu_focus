<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Studentparent Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Studentparent::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"email" => $faker->safeEmail,
		"photo" => $faker->imageUrl(),

    ];
});
