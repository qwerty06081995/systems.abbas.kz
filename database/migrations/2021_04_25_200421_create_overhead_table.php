<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverheadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overhead', function (Blueprint $table) {
            $table->id();
            $table->string('overhead_code');
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
            // Courier adds
            $table->double('total_weight');
            $table->integer('rate');
            $table->integer('additional_service');
            $table->double('volume_weight');
            $table->integer('declared_value');
            $table->double('sum');
            $table->integer('count_place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('overhead');
    }
}
