<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Blog::class, function (Faker $faker) {
    $name = ['title 1', 'title 2', 'title 3', 'title 4',
    'title 8', 'title 7', 'title 6', 'title 5'
    ];
    return [
        'title' => $faker->randomElement($name),
        'image' => $faker->imageUrl($width = 480, $height = 320),
        'content' => $faker->text(200),
        'date' => $faker->dateTimeBetween('-1 months', 'now'),
    ];
});
