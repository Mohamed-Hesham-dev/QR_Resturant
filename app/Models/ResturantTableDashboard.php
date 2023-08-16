<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantTableDashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'is_active',
        'num_chairs',
        'num_table',
        'area',
        'user_id',
        'resturant_id'
    ];
}
