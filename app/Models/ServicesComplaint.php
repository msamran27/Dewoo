<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesComplaint extends Model
{
    use HasFactory;

    protected $table='services_complaints';

    protected $fillable=
    [
        'complaint',
        'Driver_Complant',
        'over_speed_complaint',
        'Staff_Complaint',
        'deleted_at',
    ];
    public function complanint()
    {
        return $this->belongsTo(custmer::class);
    }
}
