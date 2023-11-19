<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_media_setting extends Model
{
    use HasFactory;
    public $fillable = [
        'icon',
        'url'
    ];

}
