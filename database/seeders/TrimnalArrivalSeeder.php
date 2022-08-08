<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Helpers\Locations;
use App\Models\TrimnalArrival;


class TrimnalArrivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Locations::TrimnalArrival() as $Trimnal){
            TrimnalArrival::create([
                'id' => $Trimnal['id'],
                'city_id' => $Trimnal['city_id'],
                'name' => $Trimnal['name'],
                'deleted_at' => now(),
            ]);
        }
        
    }
}
