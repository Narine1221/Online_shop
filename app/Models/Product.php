<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }

    public function history()
    {
        return $this->belongsTo(Histories::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
