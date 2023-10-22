<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    public function user()
    {
        return $this->belongsTo(User::class, 'item_id');
    }

    public $timestamps = false;

    protected $fillable = [
        'name', 'price', 'detail', 'inventory', 'image', 'status', 'category_id',
    ];
}


