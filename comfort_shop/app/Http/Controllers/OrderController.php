<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

session_start();

class OrderController extends Controller
{
    public function forOrders()
    {
        $user = User::find(str(Auth::id()));
        return view('orders', ['orders' => $user->orders->sortByDesc('id'), 'user' => $user]);
    }

    public function makeOrder()
    {
        $user = User::find(str(Auth::id()));
        $basket = $user->basket;
        return view('orderForm', ['items' => $basket->items, 'total'=> $basket->total]);
    }

    public function order(Request $request)
    {
        $user = User::find(str(Auth::id()));
        $basket = $user->basket;
        $order_id = DB::table('orders')->insertGetId([
            'user_id' => $user->id,
            'amount' => $basket->total,
            'date' => date('Y-m-d H:i:s'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'region' => $request->input('region'),
            'city' => $request->input('city'),
            'address' => $request->input('adr'),
            'zip' => $request->input('zip')
        ]);
        foreach ($basket->items as $item) {
            DB::table('item_order')->insert([
                'item_id' => $item->id,
                'order_id' => $order_id,
                'amount' => $item->pivot->quantity
            ]);
        }
        
        DB::table('basket_item')->where([
            'basket_id' => $basket->id
        ])->delete();
        return redirect()->route('orders');
    }

}
