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
            $table->id();

            $table->string('company', 100);

            $table->string('departur_station', 150);

            $table->string('arival_station', 150);

            $table->time('departures_time');

            $table->time('arrivals_time');

            $table->string('code_train', 10);

            $table->string('number_carriages', 50);

            $table->boolean('on_time');

            $table->boolean('cancel');

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
        Schema::dropIfExists('trains');
    }
}
