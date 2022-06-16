<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

session_start();

class FavouritesController extends Controller
{
    public function favourite()
    {
        $user = User::find(str(Auth::id()));
        if(!$user){
            return redirect()->route('user');
        }
        $favourite = $user->favourite;
        return view('favourite', ['items' => $favourite->items->reverse()]);
    }

    public function addToFavourites($item_id)
    {
        $user = User::find(str(Auth::id()));
        DB::table('favourite_item')->insert([
            'favourite_id' => $user->favourite_id,
            'item_id' => $item_id
        ]);
        return back();
    }

    public function removeFromFavourites($item_id)
    {
        $user = User::find(str(Auth::id()));
        $whereArray = array('favourite_id' => $user->basket_id, 'item_id' => $item_id);
        $query = DB::table('favourite_item');
        foreach ($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        $query->delete();
        return back();
    }

}
