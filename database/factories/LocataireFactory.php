<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Locataire;
use Faker\Generator as Faker;

$factory->define(Locataire::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->streetAddress(),
        'postalcode' => $faker->postcode(),
        'country' => $faker->country(),
        'city' => $faker->city(),
        'birth_date' => $faker->date(),
        'place_of_birth' => $faker->city(),
        'nationality' => 'française',
        'phone_number' => $faker->phoneNumber(),
        'idcard_number' => $faker->ein(),
    ];
});
