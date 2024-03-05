<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;




    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class,'actor_id');
    }

    public function salle()
    {
        return $this->belongsTo(salle::class,'salle_id');
    }
}
