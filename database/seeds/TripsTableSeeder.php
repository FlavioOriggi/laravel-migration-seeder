<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++){

            // creiamo una nuova istanza
            $newTrip = new Trip();

            // popoliamo le tighe della tabella con dei valori fake
            $newTrip->title = 'viaggio n ' .rand(1,20);
            $newTrip->nation = 'nazione n ' .rand(1,200);
            $newTrip->city = 'Mantova';
            $newTrip->address = 'via della speranza n ' .rand(1,100);
            $newTrip->number_people = rand(1,10);
            $newTrip->rooms = rand(1,20);
            $newTrip->type = 'appartamento';
            $newTrip->description = "lorem ipsum dolor sit amet";
            $newTrip->price = rand(200,5000);  

            // salviamo la nuova istanza nella tabella
            $newTrip->save();       

        }
    }
}
