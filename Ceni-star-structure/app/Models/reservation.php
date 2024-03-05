<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    
    
    public function chair()
    {
        return $this->belongsTo(chairs::class, 'chair_id');
    }
}
