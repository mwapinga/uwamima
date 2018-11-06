<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('order_no');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('quantity');
            $table->string('firstname');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('oreder_date');
            $table->date('required_date')->nullable;
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
