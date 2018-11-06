<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('block_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->string('carnumber');
            $table->string('drivername');
            $table->integer('quantity');
            $table->date('date');
            $table->time('intime');
            $table->time('outime');
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
        Schema::dropIfExists('imports');
    }
}
