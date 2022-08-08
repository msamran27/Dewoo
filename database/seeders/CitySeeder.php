<?php

namespace Database\Seeders;

use App\Helpers\Locations;
use App\Models\City;
use Illuminate\Database\Seeder;



class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Locations::cities() as $city){
            City::create([
                'id' => $city['id'],
                'Province_id' => $city['Province_id'],
                'name' => $city['name'],
                'deleted_at'=> now(),
            ]);
        }
    }
}
