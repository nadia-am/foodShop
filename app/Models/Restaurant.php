<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurantTypes(): HasMany
    {
        return $this->hasMany(RestaurantType::class);
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

    public function foods(): HasManyThrough
    {
        return $this->hasManyThrough(Food::class , Menu::class);
    }
}
