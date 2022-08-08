<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['']; 

    public function idcard(){
        return $this->hasOne(idcard::class);
    }
    public function phone(){
        return $this->hasMany(Phone::class);
    }
    public function teacher(){
        return $this->belongsToMany(teacher::class);
    }
}
