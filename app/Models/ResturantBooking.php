<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResturantBooking extends Model
{
    use HasFactory;
    protected $fillable=[
        "packageid" ,
        "name" ,
        "phone"  ,
        "resturantname"  ,
        "Message"  
    ];
}
