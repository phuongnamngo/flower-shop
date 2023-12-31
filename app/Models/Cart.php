<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'user_id',
        'product_id',
        'product_img',
        'product_name',
        'product_quantity',
        'price',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->price * $this->quantity;
    }
}
