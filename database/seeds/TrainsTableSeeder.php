<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i = 0; $i < 1000; $i++) {
            $newTrain = new Train();
            $newTrain->company_name = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->date = $faker->dateTimeInInterval('-1 days', '+3 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(8000, 9999);
            $newTrain->carriage_number = rand(0,9);
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancel_train = $faker->boolean();
            $newTrain->save();
        }
    }
}
