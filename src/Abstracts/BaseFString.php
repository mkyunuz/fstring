<?php

namespace Mkyunuz\FString\Abstracts;

use Mkyunuz\FString\Contract\NumberInterface;
use Mkyunuz\FString\Contract\FStringInterface;
use Mkyunuz\FString\Contract\FStringValidationInterface;
use Mkyunuz\FString\Number;
use Mkyunuz\FString\Validation\DateValidation;
use Mkyunuz\FString\Validation\EmailValidation;
use Mkyunuz\FString\Validation\PhoneNumberValidation;

abstract class BaseFString implements FStringInterface, FStringValidationInterface {
    use PhoneNumberValidation, EmailValidation, DateValidation;
    public static $instance;

    abstract public function make() : FStringInterface;


    public static function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new static;
        }
        return self::$instance->make();
    }
    
    public static function number() : NumberInterface
    {
        return Number::getInstance();
    }
    
}