<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'price',
        'features',
        'package_duration',
        'Description',
        'status',
        'currency_id'
    ];
    public function currency()
    {
        return $this->belongsTo(Currency::class,'id');
    }

    // public function getFeaturesAttribute($value) {
    //     return explode(',',$value);
    //   }
    // public function getFeaturesAttribute($value) {
    //     return (is_array($value): explode(',',$value)? $value;)
    // }
}
