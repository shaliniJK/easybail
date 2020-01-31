<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'property_type_id' => factory(App\PropertyType::class),
        'address' => $faker->streetAddress(),
        'postcode' => $faker->postcode(),
        'country' => $faker->country(),
        'city' => $faker->city(),
        'nb_rooms' => '2',
        'size' => $faker->randomNumber(4),
    ];
});
