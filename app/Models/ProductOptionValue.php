<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'product_option_value';

    public function option()
    {
        return $this->belongsTo(ResturantOptionDashboard::class, 'option_id');
    }

    public function product()
    {
        return $this->belongsTo(ResturantProductDashboard::class, 'product_id');
    }
}
