<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_tickets', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('ticketNumber_id')->constrained();
            // $table->foreignId('ticket_not_issued')->constrained();
            // $table->foreignId('other')->constrained();
            
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
        Schema::dropIfExists('refund_tickets');
    }
}
