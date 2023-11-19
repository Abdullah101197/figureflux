<?php

namespace Faker\Provider\en_IN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+92 ## ########',
        '+92 ### #######',
        '0## ########',
        '0### #######',
    ];

    /**
     * An array of en_IN mobile (cell) phone number formats
     *
     * @var array
     */
    protected static $mobileFormats = [
        '+92 3#########',
        '+92 3#########',
        '+92 3#########',
        '03#########',
        '03#########',
        '03#########',
    ];

    /**
     * Return a en_IN mobile phone number
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
