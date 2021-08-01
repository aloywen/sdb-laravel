<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Box;
use Faker\Generator as Faker;

$factory->define(Box::class, function (Faker $faker) {
    return [
        'box' => $faker->sentence(),
        'kondisi' => $faker->sentence(),
        'ukuran' => $faker->sentence(),
        'harga' => $faker->sentence(6),
    ];
});
