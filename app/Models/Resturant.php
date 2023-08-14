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


}
