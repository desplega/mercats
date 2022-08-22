<?php

namespace App\Models;

use App\Filament\Resources\OwnerResource\Pages\EditOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'town', 'state'];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function owners()
    {
        return $this->hasMany(Owner::class);
    }
}
