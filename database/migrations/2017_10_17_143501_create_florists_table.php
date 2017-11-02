<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('florists', function (Blueprint $table) {
            $table->increments('id');
			 $table->integer('area_id')->nullable();
			 $table->integer('user_id')->nullable();
			 $table->text('address')->nullable();
			 $table->string('store_name')->nullable();
			 $table->integer('delivery_cars')->nullable();
			 $table->double('minimum_order')->nullable();
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
        Schema::dropIfExists('florists');
    }
}
