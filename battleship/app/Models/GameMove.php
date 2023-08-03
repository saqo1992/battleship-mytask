<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameMove extends Model
{          
    // Define relationships with other models
    public function player()
    {
        return $this->belongsTo(Player::class);
    } 
}
