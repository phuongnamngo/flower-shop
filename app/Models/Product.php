<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'desc',
        'content',
        'price',
        'img',
        'category_id',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id', 'category_id');
    }
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'LIKE', '%' . $keyword . '%');
    }
}
