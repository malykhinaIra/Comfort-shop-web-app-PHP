<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

    class Customer extends Model
    
    {
        public function orders() {
            return $this->hasMany(Order::class);
        }

        public function basket() {
            return $this->belongsTo(Basket::class);
        }

        public function favourite() {
            return $this->belongsTo(Favourite::class);
        }

     }
    
    
?>