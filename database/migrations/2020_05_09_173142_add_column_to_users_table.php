<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->integer('role')->default(1)->nullbale()->comment("1: kh; 10 admin");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropcolumn('role');
            $table->dropcolumn('address');
            $table->dropcolumn('phone_number');
            $table->dropcolumn('username');
        });
    }
}
