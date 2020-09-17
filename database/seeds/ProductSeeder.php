<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        $categories = \App\Models\Category::all()->pluck('id');
        for ($i = 0; $i<count($categories); $i++) {
            factory(App\Models\Product::class, 10)->create([
                'category_id' => $categories[$i],
            ]);
        }
    }
}
