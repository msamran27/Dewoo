<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Ticket extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='tickets';

    protected $fillable=
    [
    
        'city_id',
        'Custmer_id',
        'trimnal_Departure',
        'trimnal_Arrival',
        'ticketNumber',
        'seat_no',
        'price',
        'company_name',
        'busSerial_no',
        'Made_in',
        'type',
        'departure_date',
        'departure_time',
        'deleted_at',

    ];
    public function tickt()
    {
        return $this->belongsTo(Custmer::class);
    }
}

