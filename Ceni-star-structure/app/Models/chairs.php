<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chairs extends Model
{
    use HasFactory;


    public function salle()
    {
        return $this->belongsTo(salle::class , 'salle_id');
    }
    public function reservations()
    {
        return $this->hasMany(reservation::class, 'chair_id');
    }
}
