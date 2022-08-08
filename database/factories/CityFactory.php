<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = City::class;

    public function definition()
    {
        return
        [
        'Province_id'=>Province::all()->random()->id,
        'name'=> $this->faker->name(),
        'deleted_at'=>$this->faker->date(),
        ];
    }
}
