<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function carts()
    {
        return $this->belongsTo(Carts::class);
    }

    public function histories()
    {
        return $this->hasMany(Histories::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
