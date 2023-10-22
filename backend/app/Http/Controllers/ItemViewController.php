<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ItemTrait;
use Illuminate\Http\Request;

class ItemViewController extends Controller
{
    use ItemTrait;

    public function index()
    {
        $items = Item::paginate(10);

        return view('item-view', ['items' => $items]);
    }
}
