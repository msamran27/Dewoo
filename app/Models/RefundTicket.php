<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundTicket extends Model
{
    use HasFactory;

    protected $table='refund_tickets';

    protected $fillable=
    [
        'Bus_cancel',
        'ticket_not_issued',
        'other',
        'deleted_at',
    
    ];
}
