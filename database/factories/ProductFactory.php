<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $name = ['Trở 1', 'Trở 2', 'arduino', 'tụ', 'dây nối', 'đèn led', 'pin', 'quạt mini', 'máy hàn', 'nhựa thông', 'thiếc'];
    $price = [10000, 150000, 20000, 30000, 40000, 50000];
    return [
        'name' => $faker->randomElement($name),
        'price' => $faker->randomElement($price),
        'description' => $faker->text(100),
        'image' => $faker->imageUrl($width = 480, $height = 320),
        'specifications' => $faker->text(100),
    ];
});
