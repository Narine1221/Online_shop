<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasmany(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}