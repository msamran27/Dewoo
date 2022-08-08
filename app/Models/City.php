<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    use HasFactory;

    

    protected $table='cities';

    protected $fillable=
    [
        'Province_id',
        'name',
        'deleted_at',

    ];

    public function cities()
    {
        return $this->hasMany(TrimnalArrival::class);
    }
    public function city()
    {
        return $this->hasMany(TrimnalDeparture::class);
    }

    public function Province()
    {
        return $this->belongsTo(Province::class);
    }
    
    
}
