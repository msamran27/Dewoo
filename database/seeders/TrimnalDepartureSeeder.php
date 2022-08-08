<?php

namespace Database\Seeders;

use App\Helpers\Locations;
use App\Models\TrimnalDeparture;
use Illuminate\Database\Seeder;

class TrimnalDepartureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Locations::TrimnalDeparture() as $TrimnalDeparture){
            TrimnalDeparture::create([
                'id' => $TrimnalDeparture['id'],
                'city_id' => $TrimnalDeparture['city_id'],
                'name' => $TrimnalDeparture['name'],
                'deleted_at'=> now(),
            ]);
        }
    }
}
