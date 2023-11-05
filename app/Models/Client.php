<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(Role::class, 'user_id', 'id');
    }

    public function orders(){
        return $this->belongsToMany(Order::class, "client_orders", 'client_id', 'order_id');
    }
}
