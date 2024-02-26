<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;




    public function film()
    {
        return $this->hasMany(Film::class,'salle_id');
    }
}
