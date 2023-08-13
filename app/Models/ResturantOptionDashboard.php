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
    public function value()
    {
        return $this->hasMany(ResturantValueDashboard::class,'option_id');
    }
}
