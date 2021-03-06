<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {

    return [
        'amount' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
