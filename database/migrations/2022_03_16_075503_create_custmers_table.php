<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custmers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('Father_name');
            $table->string('CNIC');
            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();;
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
        Schema::dropIfExists('custmers');
    }
}
