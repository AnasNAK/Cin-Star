<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;




    public function films()
    {
        return $this->hasMany(film::class);
    }

    public function chairs()
    {
        return $this->hasMany(chairs::class);
    }
}
