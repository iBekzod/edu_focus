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
		"role" => $faker->randomNumber(1, true),
		"age" => $faker->randomNumber(2, true),
		"phone_number" => $faker->phoneNumber,
		"address" => $faker->address,
		"city" => $faker->city,
		"state" => $faker->city,
		"country" => $faker->country,
		"postal_code" => $faker->randomNumber(5, true),
		"email" => $faker->safeEmail,
		"email_verified_at" => $faker->dateTime(),

    ];
});
