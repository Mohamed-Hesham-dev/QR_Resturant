<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantProductDashboard extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function  options()
    {
        return $this->belongsToMany(ResturantOptionDashboard::class, 'product_option_value', 'product_id', 'option_id')->withPivot('option_id', 'value_id', 'price')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(ResturantCategoryDashboard::class, 'category_id', 'id');
    }
}
