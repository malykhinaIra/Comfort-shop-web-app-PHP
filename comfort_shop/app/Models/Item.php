<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
    class Item extends Model
    
    {
        public function rooms() {
            return $this->belongsToMany(Room::class);
        }

        public function baskets() {
            return $this->belongsToMany(Basket::class)->withPivot('quantity');
        }

        public function categories() {
            return $this->belongsToMany(Category::class);
        }

        public function favourites() {
            return $this->belongsToMany(Favourite::class);
        }

        public function orders() {
            return $this->belongsToMany(Order::class)->withPivot('amount');
        }

     }
