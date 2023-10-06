<?php
namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'detail',
        'inventory',
        'image',
        'status',
        // 'category_id',
    ];
    public function cart()
    {
        return $this->belongsTo(Cart::class,'item_id');
    }
    public function item()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
