<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class ErrorHelper
{
    public static function title()
    {
        return self::getError('title');
    }

    public static function bio()
    {
        return self::getError('bio');
    }

    public static function birthDay()
    {
        return self::getError('birthday');
    }
    public static function phone()
    {
        return self::getError('phone');
    }
    public static function address()
    {
        return self::getError('address');
    }
    public static function languages()
    {
        return self::getError('languages');
    }
    public static function freelance()
    {
        return self::getError('freelance');
    }
    public static function cv_url()
    {
        return self::getError('cv_url');
    }
    public static function image_url()
    {
        return self::getError('image_url');
    }
    private static function getError($field)
    {
        $errors = Session::get('errors');
        if ($errors && $errors->has($field)) {
            return '<div class="invalid-feedback text-danger">' . implode('<br>', $errors->get($field)) . '</div>';
        }
        return '';
    }
}
