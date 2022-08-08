<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\TrimnalArrival;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrimnalArrivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = TrimnalArrival::class;

    public function definition()
    {
        return
        [
        'city_id'=>City::all()->random()->id,
        'name' => $this->faker->name(),
        'deleted_at'=>$this->faker->date(),
        ];
    }
}
