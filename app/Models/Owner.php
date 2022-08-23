<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'address', 'tax_number', 'market_id', 'store_id'];

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function getFullNameAttribute()
    {
       return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }
}
