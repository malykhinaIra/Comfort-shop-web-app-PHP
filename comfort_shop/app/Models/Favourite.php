<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Favourite extends Model
    
    {
        public function items() {
            return $this->belongsToMany(Item::class);
        }

        public function user() {
            return $this->belongsTo(User::class);
        }

     }
    
    
?>