<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    use HasFactory;
    protected $table = 'restaurant_type';
    protected $guarded = [];

    public const RESTAURANT = 'restaurant';
    public const FAST_FOOD = 'fast-food';
    public const KITCHEN = 'kitchen';
    public const COFFEE_SHOP = 'coffee-shop';

    public const TYPES = [
        self::RESTAURANT => ['key' => self::RESTAURANT, 'fa_name' => 'رستوران'],
        self::FAST_FOOD => ['key' => self::FAST_FOOD, 'fa_name' => 'فست فود'],
        self::KITCHEN => ['key' => self::KITCHEN, 'fa_name' => 'آشپزخونه'],
        self::COFFEE_SHOP => ['key' => self::COFFEE_SHOP, 'fa_name' => 'کافی شاپ'],
    ];



}
