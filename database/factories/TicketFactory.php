<?php

namespace Database\Factories;

use App\Models\Buses;
use App\Models\City;
use App\Models\Custmer;
use App\Models\Ticket;
use App\Models\TrimnalArrival;
use App\Models\TrimnalDeparture;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Ticket::class;

    public function definition()
    {
        return[
            'Bus_id' => Buses::all()->random()->id,
            'city_id' => City::all()->random()->id,
            'Custmer_id' => Custmer::all()->random()->id,
            'trimnal_Departure_id' => TrimnalArrival::all()->random()->id,
            'trimnal_Arrival_id' => TrimnalDeparture::all()->random()->id,
            'TicketNumber' => $this->faker->numberBetween(200,299),
            'seat_no' => $this->faker->numberBetween(1,45),
            'price' =>  $this->faker->randomElement(['1750Rs','2200Rs','2500Rs','3000Rs']),
            'departure_date' => $this->faker->date(),
            'departure_time' => $this->faker->time(),
            'Arrival_time' => $this->faker->time(),
            'deleted_at' => $this->faker->date(),
        ];
    }
}
