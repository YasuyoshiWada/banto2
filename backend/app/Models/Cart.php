<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Transaction;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'item_price',
        'qty',
        'timestamp',

    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function item(){
        return $this->hasMany(Item::class)->latest();
    }
}
