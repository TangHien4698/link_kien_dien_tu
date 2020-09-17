<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

    return [
        'state' => $faker->randomElement([1,0]),
        'Verification' => $faker->text(10),
        'receiver_name' => $faker->name,
        'receiver_phone_number' =>$faker->e164PhoneNumber,
        'receiver_address'=>$faker->address,
    ];
});
