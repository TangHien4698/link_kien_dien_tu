<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Feedback::class, function (Faker $faker) {
    return [
        'content' => $faker->text(200),
        'number_star' => $faker->randomElement([1, 2, 3, 4, 5]),
        'datetime' => $faker->dateTimeBetween('-1 months', 'now'),
    ];
});
