<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemViewController;
use App\Http\Controllers\ItemEditController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/item-view', function () {
    return view('items.item-view');
});

Auth::routes();

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register',[UserController::class, 'register'])->name('register');
// Route::get('/Dashboard/index',[TransactionController::class, 'account'])->name('Dashboard.index');


Route::get('/item/edit', [ItemEditController::class, 'index'])->name('item.edit.index');

Route::get('/items/add_cart',[CartController::class,'index'])->name('Carts.add_cart');
Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');

// itemcategoriesへのルート
Route::get('/categoryitem/categoryitemlist',[CategoryItemController::class,'index'])->name('categoryitem.categoryitemlist');
Route::get('/category/edit', [CategoryItemController::class, 'index2'])->name('category.edit');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// userlistへのroute
Route::get('/userlist', [UserController::class, 'index'])->name('userlist.index');

// transactionへのroute
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');


Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

// item-viewへのroute
Route::get('/item-view', [ItemViewController::class, 'index'])->name('item-view.index');
// items.blade.phpへのroute
Route::get('/items', [ItemsController::class, 'index'])->name('items.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// dashboardのcontroller
Route::post('/getTotalPrice', [DashboardController::class, 'getTotalPrice']);
