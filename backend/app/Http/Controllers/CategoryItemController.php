<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryItemController extends Controller
{
    public function index()
    {
        return view('category.itemcategories');
    }
}
