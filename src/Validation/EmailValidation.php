<?php

namespace Mkyunuz\String\Validation;

trait EmailValidation 
{
    public static function isEmail($value) : bool
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) 
        {
            return false;
        }
        return true;
          
          
    }
}