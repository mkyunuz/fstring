<?php

namespace Mkyunuz\FString\Validation;

trait DateValidation 
{
    public static function isDate($value, $format = "Y-m-d") : bool
    {
       
        $d = \DateTime::createFromFormat($format, $value);
        return $d && $d->format($format) == $value;

          
    }
}