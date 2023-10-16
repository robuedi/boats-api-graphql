<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boat extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "year", "price", "length", "location"];

    public function payments(): HasMany
    {
        return $this->hasMany(Boat::class, 'boat_id');
    }
}
