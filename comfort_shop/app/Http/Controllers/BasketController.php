<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function forBaskets()
    {
        $user = User::find(str(Auth::id()));
        if(!$user){
            return redirect()->route('user');
        }
        $basket = $user->basket;
        $total = 0;
        foreach ($basket->items as $item) {
            $total += $item->price * $item->pivot->quantity;
        }
        DB::table('baskets')->where([
            'id' => $basket->id
        ])->update(['total' => $total]);
        
        return view('basket', ['items' => $basket->items->reverse(), 'total' => $total, 'basket' => $basket]);
    }

    public function addToBasket($item_id)
    {
        $user = User::find(str(Auth::id()));
        if ($user->basket->items->contains($item_id)) {
            $pivot = $user->basket->items()->where('item_id', $item_id)->first()->pivot;
            $quantity = $pivot->quantity + 1;
            $pivot->update(['quantity' => $quantity]);
        } else {
            DB::table('basket_item')->insert([
                'basket_id' => $user->basket_id,
                'item_id' => $item_id
            ]);
        }
        return back();
    }

    public function removeFromBasket($item_id)
    {
        $user = User::find(str(Auth::id()));
        $whereArray = array('basket_id' => $user->basket_id, 'item_id' => $item_id);
        $query = DB::table('basket_item');
        foreach ($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        $query->delete();
        return back();
    }

    public function plus($item_id)
    {
        $user = User::find(str(Auth::id()));
        $pivot = $user->basket->items()->where('item_id', $item_id)->first()->pivot;
        $quantity = $pivot->quantity + 1;
        $pivot->update(['quantity' => $quantity]);
        return back();
    }

    public function minus($item_id)
    {
        $user = User::find(str(Auth::id()));
        $pivot = $user->basket->items()->where('item_id', $item_id)->first()->pivot;
        $quantity = $pivot->quantity - 1;
        if($quantity){
        $pivot->update(['quantity' => $quantity]);
        }
        else{
            $this->removeFromBasket($item_id);
        }
        return back();
    }
}
