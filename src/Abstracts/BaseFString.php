<?php

namespace Mkyunuz\String\Abstracts;

use Mkyunuz\String\Contract\NumberInterface;
use Mkyunuz\String\Contract\FStringInterface;
use Mkyunuz\String\Contract\FStringValidationInterface;
use Mkyunuz\String\Number;
use Mkyunuz\String\Validation\DateValidation;
use Mkyunuz\String\Validation\EmailValidation;
use Mkyunuz\String\Validation\PhoneNumberValidation;

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