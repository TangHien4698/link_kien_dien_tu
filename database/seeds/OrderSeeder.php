<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = ['orders', 'order_details'];
        for ($i = 0; $i < 2; $i++) {
            DB::table($table[$i])->truncate();
        }
        for($k = 0; $k<20; $k++) {
            $order = factory(App\Models\Order::class, 1)->create();
            $order = $order->toArray();
            $products = Product::all()->random(3)->toArray();
            $totalMoney = 0;
            for ($j=0; $j < count($products); $j++) {

                $orderDetail = factory(App\Models\OrderDetail::class)->create(
                    [
                        'order_id' => $order[0]['id'],
                        'product_id' => $products[$j]['id'],
                        'price' => $products[$j]['price'],
                    ]
                );
                $totalMoney = $totalMoney + (double)($products[$j]['price']) * $orderDetail->amount;
            }
            $dataInsert = [
                'total_money' => (double)$totalMoney
            ];
            DB::table('orders')->where('id', $order[0]['id'])->update($dataInsert);
        }
    }
}
