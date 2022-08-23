<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'market_id'];

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }
}
