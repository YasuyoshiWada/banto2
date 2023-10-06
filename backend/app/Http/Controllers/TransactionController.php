<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;


use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $cart;
    private $transaction;
    public function __construct(Cart $cart, Transaction $transaction)
    {
        $this->cart=$cart;
        $this->transaction=$transaction;
    }

    public function account()
    {
        $all_account=$this->transaction->all();
        return view('dashboard.index')
        ->with('all_account',$all_account);
    }
}
