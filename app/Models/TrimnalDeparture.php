<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrimnalDeparture extends Model
{
    use HasFactory;

    protected $table='trimnal_departures';

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


// ONE TO ONE 
// student hasOne phone 

// phone belongTo student 


// ONE TO MANY
// student hasMany books 

// books belongsTo student 


// MANY TO MANY
// student belongsToMany teachers

// teacher belongsToMany students 

// TEACHERS 
// STUDENTS

