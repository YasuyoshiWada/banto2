<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryItemController;
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
Route::get('/Dashboard/index',[TransactionController::class, 'account'])->name('Dashboard.index');

Route::get('/items/create',[ItemsController::class,'create'])->name('items.create');
Route::get('/items/index',[ItemsController::class,'index'])->name('items.index');
Route::post('/items/store',[ItemsController::class,'store'])->name('items.store');
Route::get('/cart_view',[ItemsController::class,'cart_view'])->name('cart_view');


Route::get('/items/add_cart',[CartController::class,'index'])->name('Carts.add_cart');
Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');



Route::get('/categoryitem/categoryitemlist',[CategoryItemController::class,'index'])->name('categoryitem.categoryitemlist');
