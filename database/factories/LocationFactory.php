<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'property_id' => factory(App\Property::class),
        'locataire_id' => factory(App\Locataire::class),
        'loyer' => '700',
        'charges' => '80',
        'preavis' => $faker->month(),
        'nb_locataire' => '1',
        'date_signature_bail' => $faker->date(),
        'date_entree' => $faker->date(),

    ];
});
