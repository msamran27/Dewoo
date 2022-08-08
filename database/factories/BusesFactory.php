<?php

namespace Database\Factories;

use App\Models\Buses;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusesFactory extends Factory

{
    protected $model = Buses::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
        [
        'company_name'=> $this->faker->randomElement(['youtong','Blue Brid','IC BUS','Thomas Built Buses']),
        'Upper_business_class'=> $this->faker->randomElement(['five star Upper_business_class','3 star Upper_business_class','Upper_business_classUpper_business_class']),
        'business_class'=> $this->faker->randomElement(['super business class','business class','lower business class']),
        'Economy_class'=> $this->faker->randomElement(['Economy','Economy 2','Economy 3']),
        'busSerial_no'=>$this->faker->numberBetween(2898,3044),
        'Made_in'=> $this->faker->randomElement(['Made in chaina','Made in USA','Made in chaina','Made in UK']),
        'deleted_at'=>$this->faker->date(),
        ];
    }
}
