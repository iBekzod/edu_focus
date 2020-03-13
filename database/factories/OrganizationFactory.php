<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\Organization Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Organization::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"location" => 'dfhdfhd',
		"category" => 'dfhdhgd',
		"phone_number" => $faker->phoneNumber,
		"address" => $faker->address,
		"city" => $faker->city,
		"state" => $faker->city,
		"country" => $faker->country,
		"postal_code" => '',

    ];
});
