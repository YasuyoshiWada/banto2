<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ItemTrait;


class ItemsController extends Controller
{
    use ItemTrait;

    public function index()
    {
        $items = Item::paginate(10);

        return view('items', ['items' => $items]);
    }
}
