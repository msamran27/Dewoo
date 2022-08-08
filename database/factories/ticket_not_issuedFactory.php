<?php

namespace Database\Factories;

use App\Models\RefundTicket;
use App\Models\ticket_not_issued;
use Illuminate\Database\Eloquent\Factories\Factory;

class ticket_not_issuedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = ticket_not_issued::class;

    public function definition()
    {
        return
        [
            'ticket_not_issued_id' =>RefundTicket::all()->random()->id,
            'phone'=> $this->faker->numerify('+9230###'),
            'departure_date'=>$this->faker->date(),
            'deleted_at'=>$this->faker->date(),
        ];
    }
}
