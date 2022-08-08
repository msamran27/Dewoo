<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->integer('CnicNumber');
            $table->timestamps();
        });
    }

    // ab is table mn data add kro phr chal jae ga
    // koi b class ka name capital se start krna ha, modela controller ye sb classes han 
    // us k ilawa table ka name plural mn likhna ha mtlb jmaa mn end mn S ni tha idr 
    // id_card tha table ka name, id_cards hona chaheye tha, termincal mn yehi error arha tha 
    // wo id_cards ka table expect kr rha tha model name k hisab se tm ny id_card rkha tha 

    // \App\Models\Student::get()
    // is se sb student ajaen gy
    
    //  \App\Models\Student::first()  \App\Models\Student::find(10)
    // in se 1 he student aye ga

    //  \App\Models\Student::limit(5)->get()
    // idr jitni limit set kro gy utny ayen gy

    //  \App\Models\Student::first()->idcard
    // is se 1st student k id card ajen gy 

    //  \App\Models\Student::first()->phones()->where('phone_number', 1000)->get()
    // is trha phones() k method k bad koi condition lgani ho wo lga skty ho isky lye () dalni han method k sath 

    // chlo ab koi issue aye tu btnaa phly khud full try kia kro 
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_cards');
    }
}
