<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;
    protected $fillable = [
        'resturant_name',
        'package',
        'image',
        'is_active',
        'user_id',
        'description'
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function about(){
        return $this->hasOne(ResturantContactUsSetting::class);
    }
    public function table(){
        return $this->hasMany(ResturantTableDashboard::class);
    }
    public function order(){
        return $this->hasMany(Order::class,'resturant_id');
    }

}
