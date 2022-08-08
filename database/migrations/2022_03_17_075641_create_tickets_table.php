<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('Custmer_id')->constrained();
            //$table->foreignId('trimnal_Departure_id')->constrained();
            //$table->foreignId('trimnal_Arrival_id')->constrained();
           
            $table->string('trimnal_Departure');
            $table->string('trimnal_Arrival');
            $table->integer('ticketNumber')->unique(); 
            $table->integer('seat_no')->nullable();
            $table->integer('price');
            $table->string('company_name');
            $table->string('busSerial_no')->nullable();
            $table->string('Made_in');
            $table->enum('type', ['Upper_business_class', 'business_class','Economy_class']);

            $table->date('departure_date');
            $table->time('departure_time');
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
        Schema::dropIfExists('tickets');
    }
}
