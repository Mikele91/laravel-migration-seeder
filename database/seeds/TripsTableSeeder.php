<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){

            $newTrip = new Trip();
            $newTrip->code =$faker->ean8();
            $newTrip->city =$faker->city();
            $newTrip->state =$faker->state();
            $newTrip->price =$faker->randomFloat(2, 9999, 400);
            $newTrip->description =$faker->paragraph(2);
            $newTrip->arrival =$faker->dateTime();
            $newTrip->departure =$faker->dateTime();
            $newTrip->save();
            

        }
    }
}
