<?php

namespace Database\Seeders;

use App\Helpers\Locations;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Locations::province() as $province){
            Province::create([
                'id' => $province['id'],
                'name' => $province['name'],
            ]);
        }
    }
}
