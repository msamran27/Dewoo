<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrimnalArrival extends Model
{
    use HasFactory;

    protected $table='trimnal_arrivals';

    protected $fillable=
    [
        'city_id',
        'name',
        'deleted_at',
        
    ];
    public function trimnal()
    {
        return $this->belongsTo(City::class);
    }


    public function trimnalDeparture()
    {
        return $this->hasMany(buses::class);
    }
}
