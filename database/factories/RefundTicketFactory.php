<?php

namespace Database\Factories;

use App\Models\RefundTicket;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefundTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = RefundTicket::class;

    public function definition()
    {
        $ticketNumber = Ticket::all()->random()->TicketNumber;

        return  [
            'Bus_cancel' => $ticketNumber,
            'ticket_not_issued' => $ticketNumber,
            'other' => $ticketNumber,
            'deleted_at' => $this->faker->date(),
        ];
    }
}
