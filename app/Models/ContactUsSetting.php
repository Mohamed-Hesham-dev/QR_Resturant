<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'mobile',
       
        'facebook',
        'instagram',
        'youtube',

        
    ];
}
