<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function orders(){
        return $this->belongsToMany(Order::class, "order_products", 'product_id', 'order_id');
    }
}
