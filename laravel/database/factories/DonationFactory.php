<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {

    $array = [1, 2, 3, 4, 5];

    return [
        'payment_id' => $faker->word,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'sum' => $faker->numberBetween(1, 200),
        'message' => $faker->text(100),
        'completed' => 0
    ];
});
