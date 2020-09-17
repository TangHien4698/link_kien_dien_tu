<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,   
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$1jxv2pQ2x9M1l1WpQK7n4e6.U1H9umWL5RG0ONgNUHCTykSujSdPy', // password 123456
        'remember_token' => Str::random(10),

        'username' => $faker->userName,
        'phone_number' =>$faker->e164PhoneNumber,
        'address'=>$faker->address,
    ];
});
