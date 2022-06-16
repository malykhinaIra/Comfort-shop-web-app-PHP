<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Feedback;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class MainController extends Controller
{

    public function forLend()
    {
        return view('lend', ['rooms' => Room::get()]);
    }

    public function forInfo()
    {
        return view('info');
    }

    public function forCatalog()
    {
        return view('catalog', ['rooms' => Room::get(), 'categories' => Category::get()]);
    }

    public function forRoom($id)
    {
        $room = Room::find($id);
        return view('room', ['rooms' => Room::get(), 'room' => $room, 'items' => $room->items]);
    }

    public function forCategory($id)
    {
        $category = Category::find($id);
        return view('room', ['rooms' => Room::get(), 'room' => $category, 'items' => $category->items]);
    }

    public function forItem($id)
    {
        $user = User::find(str(Auth::id()));
        return view('item', ['item' => Item::find($id), 'user' => $user]);
    }

    public function forUser()
    {
        $user = User::find(str(Auth::id()));
        return view('user', ['user' => $user]);
    }
    
    public function login()
    {
        return view('login');
    }

    public function search(Request $request)
    {
        $search = $request->input('name');
        $items = Item::query()
        ->where('description', 'LIKE', "%{$search}%")
        ->get();
        return view('search', ['items' => $items, 'search'=> $search]);
    }

    public function check(Request $request)
    {
        $request->validate([
            'mail' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/')
        ]);
        return $this->result($request);
    }

    public function result(Request $request)
    {
        $mail = $request->input('mail');
        Mail::to($mail)->send(new Feedback());
        return back();
    }
}
