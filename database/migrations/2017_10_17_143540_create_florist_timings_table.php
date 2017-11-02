<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloristTimingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('florist_timings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_id')->nullable();;
            $table->integer('florist_id')->nullable();;
            $table->integer('closed')->nullable();;
            $table->string('opening')->nullable();;
            $table->string('closing')->nullable();;
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
        Schema::dropIfExists('florist_timings');
    }
}
