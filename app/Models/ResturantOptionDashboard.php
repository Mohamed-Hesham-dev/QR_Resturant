<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantOptionDashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'option_name',
        
    ];
    public function values()
    {
        return $this->hasMany(ResturantValueDashboard::class,'option_id');
    }

    

    public function  products(){

        return $this->belongsToMany(ResturantProductDashboard::class, 'product_option_value');

    }
}
