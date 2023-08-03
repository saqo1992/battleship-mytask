<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // Define relationships with other models
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function ships()
    {
        return $this->hasMany(Ship::class);
    }
}
