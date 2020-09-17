<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Product;
class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->truncate();
        $users = User::all()->random(10)->pluck('id');
        $products = Product::all()->random(10)->pluck('id');
        for ($i=0; $i < 10 ; $i++) {
            factory(App\Models\Feedback::class)->create([
                    'user_id' => $users[$i],
                    'product_id' => $products[$i],
                ]
            );
        }
    }
}
