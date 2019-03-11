<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('miles');
            $table->integer('kilometres');
            $table->string('model');
            $table->string('chassis');
            $table->string('manufacture');
            $table->string('color');
            $table->string('fueltype');
            $table->string('transmission');
            $table->text('exteriorfeature');
            $table->text('interiorfeature');
            $table->text('safetyfeature');
            $table->text('audiofeature');
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
        Schema::dropIfExists('auctions');
    }
}
