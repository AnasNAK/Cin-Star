<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hour',
        'genre_id',
        'actor_id',
        'salle_id',
    ];


    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function actor()
    {
        return $this->hasMany(Actor::class,'film_id');
    }

    public function salle()
    {
        return $this->belongsTo(salle::class,'salle_id');
    }
}
