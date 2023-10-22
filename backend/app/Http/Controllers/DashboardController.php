<?php

namespace App\Http\Controllers;
use DateTime;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Cart; // Cart モデルを使用するために必要な use 文を追加

class DashboardController extends Controller
{
    public function index()
    {
        $ordersFromDate= Cart::whereBetween('created_at', [date('Y-m-01'), date('Y-m-t')]);
        $totalPrice = $ordersFromDate->sum('item_price');
        $totalOrders = $ordersFromDate->get()->count();
        $averageUnit = $ordersFromDate->count() > 0 ? $totalPrice / $ordersFromDate->count() : 0;
        $branches = Branch::where('status', 'active')->get();
        return view('dashboard.index', [
            'totalPrice' => $totalPrice,
            'totalOrders' => $totalOrders,
            'averageUnit' => $averageUnit,
            'branches'    => $branches
        ]);
    }

    public function getTotalPrice(Request $request)
    {
        $startDate =  date('Y-m-d 00:00:00', strtotime($request->input('start_date')));
        $endDate = date('Y-m-d 23:59:59', strtotime($request->input('end_date') . ' + 1 day - 1 second'));

        // Cartテーブルから指定された日付範囲内のアイテム価格の合計を計算
        $ordersFromDate = Cart::whereBetween('created_at', [$startDate, $endDate]);
        $totalPrice = $ordersFromDate->sum('item_price');
        $totalOrders = $ordersFromDate->get()->count();
        $averageUnit = $ordersFromDate->count() > 0 ? $totalPrice / $ordersFromDate->count() : 0;

        return response()->json([
            'total_price' => $totalPrice,
            'total_orders' => $totalOrders,
            'average_unit' => $averageUnit,
        ]);
    }
}
