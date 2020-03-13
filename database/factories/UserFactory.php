<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| App\Models\User Factories
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
		"name" => $faker->name,
		"photo" => $faker->imageUrl(),
		"role" => '',
		"age" => $faker->randomNumber(),
		"phone_number" => $faker->phoneNumber,
		"address" => $faker->address,
		"city" => $faker->city,
		"state" => $faker->city,
		"country" => $faker->country,
		"postal_code" => '',
		"email" => $faker->safeEmail,
		"email_verified_at" => $faker->dateTime(),

    ];
});
