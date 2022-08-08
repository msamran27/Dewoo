<?php

namespace Database\Factories;

use App\Models\other;
use App\Models\RefundTicket;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = other::class;

    public function definition()
    {
        return
         [
            'other_id'=> RefundTicket::all()->random()->id,
            'Descripation'=> $this->faker->realText(200),
            'phone'=> $this->faker->numerify('+9230###'),
            'departure_date'=>$this->faker->date(),
            'deleted_at'=>$this->faker->date(),
            
        ];
    }
}
