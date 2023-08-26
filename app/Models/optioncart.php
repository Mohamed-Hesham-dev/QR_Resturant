<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class optioncart extends Model
{
    use HasFactory;
    protected $fillable=[
    'key',
    'value',
    'cart_id'
    ];

    public function cart(){
    return $this->belongsTo(cart::class);
    }
}
