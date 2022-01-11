<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('indentification_no');
            $table->bigInteger('driver_id')->unsigned();
            $table->bigInteger('route_id')->unsigned();
            $table->timestamps();
            $table->foreign('driver_id')->references('id')->on('drivers')->onCascade('delete');
            $table->foreign('route_id')->references('id')->on('routes')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
