<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusCancelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_cancels', function (Blueprint $table) {
            $table->id();

            $table->integer('phone');
            $table->integer('ticket_number');
            $table->date('departureDate');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_cancels');
    }
}



// buses
// id bus_name color charges bus_number

// tickets 
// id ticket_number ticket_price date

// bus_tickets
// id bus_id ticket_id 


// bus->bus_tickets->first()->ticket_number

// class Bus extends models 
// {
//     public function bus_tickets()
//     {
//         return $this->belongsToMany(Tickets::class);
//     }
// }