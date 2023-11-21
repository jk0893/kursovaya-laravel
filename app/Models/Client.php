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

    public function users(){
        return $this->hasMany(Client::class,'client_id','id');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
