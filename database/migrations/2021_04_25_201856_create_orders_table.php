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
            $table->integer('id');
            $table->string('order_code');
            $table->string('from_name');
            $table->string('from_company');
            $table->string('from_city');
            $table->string('from_address');
            $table->string('from_phone');
            $table->string('to_name');
            $table->string('to_company');
            $table->string('to_city');
            $table->string('to_address');
            $table->string('to_phone');
            $table->timestamp('data_s');
            $table->timestamp('data_e');
            $table->integer('type');
            $table->integer('speed');
            $table->integer('payment');
            $table->integer('payment_type');
            $table->string('comment');
            $table->integer('user_id');
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
