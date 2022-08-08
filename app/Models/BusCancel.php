<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusCancel extends Model
{
    use HasFactory;

    protected $table='bus_cancels';

    protected $fillable=
    [
        'Bus_cancel_id',
        'phone',
        'departureDate',
        'deleted_at',
    ];
}
