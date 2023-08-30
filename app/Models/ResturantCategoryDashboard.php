<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantCategoryDashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'user_id',
        'resturant_id'
        
    ];
    public function product(){
        return $this->hasMany(ResturantProductDashboard::class,'category_id');
    }
}
