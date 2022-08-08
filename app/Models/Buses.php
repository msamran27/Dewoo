<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    use HasFactory;
    protected $table='buses';

    protected $fillable= [
        'company_name',
        'busSerial_no',
        'Made_in',
        'deleted_at',

    ];

    public function buses()
    {
        return $this->belongsToMany(TrimnalArrival::class);
    }

    public function bus()
    {
        return $this->belongsToMany(TrimnalDeparture::class);
    }
}
