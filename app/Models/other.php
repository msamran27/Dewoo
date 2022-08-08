<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class other extends Model
{
    use HasFactory;

    protected $table='others';

    protected $fillable=
    [
        'other_id',
        'Descripation',
        'phone',
        'departure_date',
        'deleted_at',
        
    ];
}
