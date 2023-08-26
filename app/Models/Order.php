<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
    'resturant_id',
    'tablemethod',
    'Items',
    'price',
    'statue',
    'clientname',
    'phonenumber',
    'PickupTime',
    ];
    public function cart(){
        return $this->hasMany(Cart::class,'order_id');
  
    }
}
