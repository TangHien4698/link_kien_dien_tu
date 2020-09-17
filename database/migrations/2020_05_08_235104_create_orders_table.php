<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_money', 8, 2)->nullable();
            $table->integer('state')->nullable()->comment("0 = khoi tao; 1 = dang giao, 2 = closed");
            $table->string('Verification')->nullable();//xac minh
            $table->string('receiver_name')->nullable();// ten nguoi nhan
            $table->string('receiver_phone_number')->nullable(); // sdt nguoi nhan
            $table->string('receiver_address')->nullable(); // dia chi nguoi nhan

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');


    }
}
