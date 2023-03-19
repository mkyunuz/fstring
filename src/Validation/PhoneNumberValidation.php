<?php

namespace Mkyunuz\String\Validation;


trait PhoneNumberValidation
{

    private static $patterns = ["/^\+62\d{4,13}/", "/^62\d{4,14}$/", "/^0\d{4,15}$/"];

    
    public static function isPhone($value) : bool
    {
        foreach(self::$patterns as $pattern) 
        {
            $test = preg_match($pattern, $value);

            if($test) 
            {
                return true;
            }
        }
        return false;
    }

}