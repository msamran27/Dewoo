<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_not_issued extends Model
{
    use HasFactory;

    protected $table='ticket_not_issueds';

    protected $fillable=
    [
        'ticket_not_issued_id',
        'phone',
        'departure_date',
        'deleted_at',
        

    ];
}
