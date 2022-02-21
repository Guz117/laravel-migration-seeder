<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            $train->company = $faker->word(3);
            $train->departur_station = $faker->city();
            $train->arival_station = $faker->city();
            $train->departures_time = $faker->time();
            $train->arrivals_time =  $faker->time();
            $train->departures_date = $faker->date();
            $train->arrivals_date = $faker->date();
            $train->code_train = $faker->regexify('[A-Z]{2}[0-9]{8}');
            $train->number_carriages = $faker->numberBetween(0, 10);
            $train->on_time = $faker->boolean();
            $train->cancel = $faker->boolean();
            $train->save();
        }
    }
}
