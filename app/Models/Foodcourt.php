<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodcourt extends Model
{
    use HasFactory;
    protected $fillable=[
        'foodcourt_name',
        'foodcourt_logo',
        'is_active',
        'user_id'
    ];

    public function resturant(){
        return $this->hasMany(Resturant::class,'foodcourt_id');
    }
}
