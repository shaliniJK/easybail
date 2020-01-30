<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paiement;
use Faker\Generator as Faker;

$factory->define(Paiement::class, function (Faker $faker) {
    return [
        'location_id' => factory(App\Location::class),
        'mois' => $faker->month(),
    ];
});
