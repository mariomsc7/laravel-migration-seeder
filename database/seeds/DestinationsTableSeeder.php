<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            // creazione istanza (record, row)
            $new_destination = new Destination();
            // popolazione colonne 
            $new_destination->country = 'Italy';
            $new_destination->city = 'Roma';
            $new_destination->resort = 'Schiano';
            $new_destination->price = rand(1000, 5000);
            $new_destination->description = 'Description of the place here...';

            // salvare record sul db
            $new_destination->save();

        }
    }
}
