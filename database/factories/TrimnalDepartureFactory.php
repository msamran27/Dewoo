<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\TrimnalDeparture;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrimnalDepartureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = TrimnalDeparture::class;

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
