<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, "order_products", 'order_id', 'product_id');
    }
    public function orderItems()
    {
        return $this->hasMany(Order::class);
    }
}
