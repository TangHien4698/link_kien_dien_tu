<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     protected $toTrancate = ['users', 'products', 'blogs', 'feedbacks', 'categories','orders', 'order_details'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->toTrancate as $key => $table) {
            DB::table($table)->truncate();
        }

        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(FeedbackTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(OrderSeeder::class);

    }
}
