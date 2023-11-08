<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'about', 
        'title_product', 
        'description_product', 
        'image_service',
        'title_service',
        'description_service'
    ];
}
