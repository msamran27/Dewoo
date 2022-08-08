<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->integer('password');
            $table->integer('tel');
            
            $table->string('province');
            $table->boolean('vehicle1')->default(true);
            $table->boolean('vehicle2')->default(true);
            $table->boolean('vehicle3')->default(false);
          
            $table->enum('light',['on','off']);
            $table->enum('day',['morning','afternon','evining']);
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
        Schema::dropIfExists('test');
    }
}
