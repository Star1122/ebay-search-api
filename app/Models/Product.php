<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider',
        'item_id',
        'click_out_link',
        'main_photo_url',
        'price',
        'price_currency',
        'shipping_price',
        'title',
        'description',
        'valid_until',
        'brand',
    ];
}
