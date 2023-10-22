<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::query();

        // 検索キーワードの取得
        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $transactions->where('description', 'LIKE', '%' . $searchTerm . '%');
        }

        // 並べ替えの取得
        $sortOption = $request->input('sort');
        if ($sortOption === 'priceHtL') {
            $transactions->orderBy('price', 'desc');
        } elseif ($sortOption === 'name') {
            $transactions->orderBy('name', 'asc');
        } elseif ($sortOption === 'stock') {
            $transactions->orderBy('stock', 'asc');
        }

        $transactions = $transactions->paginate(10);

        return view('transaction.transaction', compact('transactions'));
    }
}
