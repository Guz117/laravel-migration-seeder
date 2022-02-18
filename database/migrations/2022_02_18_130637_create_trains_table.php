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

            $table->string('Company', 100);

            $table->string('Departur_station', 150);

            $table->string('Arival_station', 150);

            $table->time('Departures_time');

            $table->time('Arrivals_time');

            $table->string('Code_train', 10);

            $table->string('Number_carriages', 50);

            $table->boolean('On_time');

            $table->boolean('Cancel');

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
