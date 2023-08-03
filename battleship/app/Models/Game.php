<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Define relationships with other models
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
