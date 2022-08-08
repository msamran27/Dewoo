<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custmer extends Model
{
    use HasFactory;

    protected $table='custmers';

    protected $fillable=
    [
        'name',
        'Father_name',
        'CNIC',
        'phone',
        'address',
        'email',
        'deleted_at',
    ];
    public function custmer()
    {
        return $this->hasOne(Ticket::class);
    }
    
    public function servicecomplant()
    {
        return $this->hasMany(servicecomplant::class);
    }
}
