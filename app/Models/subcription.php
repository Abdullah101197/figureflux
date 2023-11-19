<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcription extends Model
{
    use HasFactory;

    public $fillable = [
        'client_id',
        'package_id'
    ];

    public function client(): HasMany
    {
        return $this->HasMany(Client::class, 'client_id');
    }



}