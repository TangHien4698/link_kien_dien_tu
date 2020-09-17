<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $name = ['Điện trở', 'arduino', 'tụ', 'dây nối', 'đèn', 'pin', 'quạt', 'máy hàn'];
        for ($i=0; $i < count($name); $i++) {
            factory(App\Models\Category::class)->create([
                    'name' => $name[$i],
                ]
            );
        }
    }
}
