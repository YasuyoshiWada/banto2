<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $cart;
    private $item;

    public function __construct(Cart $cart,Item $item)
    {

        $this->cart=$cart;
        $this->item=$item;
    }

    public function index()
    {
        return view('Carts.add_cart');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_price' => 'required | min:1|max:9999999',
            'qty' => 'required | min:1|max:200',
        ]);

        $cart = new Cart([
            'item_price' => $request->item_price,
            'qty' => $request->qty,
        ]);
        $cart->save();
        return redirect()->route('Carts.add_cart');
    }
}
