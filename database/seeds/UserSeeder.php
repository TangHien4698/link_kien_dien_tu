<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        factory(App\User::class)->create(
            [
                'username' => 'admin',
                'email'  => 'admin@gmail.com',
                'password'  => Hash::make('admin@2020'),
                'role' => 10
            ]
        );

        factory(App\User::class, 20)->create();
    }
}
