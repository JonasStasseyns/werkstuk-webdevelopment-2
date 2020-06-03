<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {

    $array = [1, 2, 3, 4, 5];

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'sum' => Arr::random($array)
//            $faker->numberBetween(1, 200)
    ];
});
