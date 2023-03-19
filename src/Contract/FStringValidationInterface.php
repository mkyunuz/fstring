<?php

namespace Mkyunuz\FString\Contract;

interface FStringValidationInterface 
{
    public static function isPhone($value) : bool;

    public static function isEmail($value) : bool;

    public static function isDate($value, $format) : bool;
}