<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;


    public $fillable = [
        'name', 'email', 'company_name','country','message'
    ];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "nasiir@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }


}
