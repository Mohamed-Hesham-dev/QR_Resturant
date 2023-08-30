<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Resturant extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable = [
        'resturant_name',
        'package',
        'resturant_logo', 
        'resturant_cover', 
        'is_active',
        'user_id',
        'foodcourt_id',
        'description'
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function table()
    {
        return $this->hasMany(ResturantTableDashboard::class);
    }
    public function getImageAttribute($value)
    {
      
        $file = $this->getMedia('image')->all();
        return $file;
    }

}
