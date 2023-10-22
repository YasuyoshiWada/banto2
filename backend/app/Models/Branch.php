<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table ='branches';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'branch_id');
    }
}
