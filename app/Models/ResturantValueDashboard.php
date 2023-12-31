<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantValueDashboard extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'resturant_value_dashboards';

    public function option()
    {
        return $this->belongsTo(ResturantOptionDashboard::class, 'option_id');
    }

    public function productOptionValues()
    {
        return $this->hasMany(ProductOptionValue::class,'value_id');
    }
}
