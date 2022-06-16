<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function items() {
        return $this->belongsToMany(Item::class);
    }
}