<?php
// app/Http/Controllers/Traits/ItemTrait.php

namespace App\Http\Controllers\Traits;

use App\Models\Item;

trait ItemTrait
{
    public function getItems()
    {
        return Item::all(); // 仮のデータ取得方法です。実際のデータベースからデータを取得するコードに置き換えてください。
    }
}
