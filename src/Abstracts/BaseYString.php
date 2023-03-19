<?php

namespace Mkyunuz\Ystring\Abstracts;

use Mkyunuz\Ystring\Contract\NumberInterface;
use Mkyunuz\Ystring\Contract\YStringInterface;
use Mkyunuz\Ystring\Contract\YStringValidationInterface;
use Mkyunuz\Ystring\Number;
use Mkyunuz\Ystring\Validation\DateValidation;
use Mkyunuz\Ystring\Validation\EmailValidation;
use Mkyunuz\Ystring\Validation\PhoneNumberValidation;

abstract class BaseYString implements YStringInterface, YStringValidationInterface {
    use PhoneNumberValidation, EmailValidation, DateValidation;
    public static $instance;

    abstract public function make() : YStringInterface;


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