<?php

namespace Database\Factories;

use App\Models\BusCancel;
use App\Models\RefundTicket;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusCancelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = BusCancel::class;

    public function definition()
    {
        return [
            'Bus_cancel_id' =>RefundTicket::all()->random()->id,
            'phone'=> $this->faker->numerify('+9230###'),
            'departureDate'=>$this->faker->date(),
            'deleted_at'=>$this->faker->date(),
        ];
    }
}
