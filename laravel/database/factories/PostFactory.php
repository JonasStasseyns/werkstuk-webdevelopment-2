<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'intro' => $faker->text(200),
        'body' => $faker->text(500),
        'image' => $faker->imageUrl($width = 800, $height = 600),
    ];
});
