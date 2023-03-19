<?php

namespace Mkyunuz\String;

use Mkyunuz\String\Abstracts\BaseFString;
use Mkyunuz\String\Contract\FStringInterface;

class FString extends BaseFString implements FStringInterface {

    public function make() : FStringInterface
    {

        return $this;
    }


    public static function asPhoneID($input)
    {
        $phoneNumber = self::asNumber($input);
		$prefixPhone = substr($phoneNumber, 0, 3);
		if($prefixPhone == "628"){
            $phoneNumber = "08".substr($phoneNumber, 3);
        }

		if(substr($phoneNumber, 0, 1) != "0" && substr($phoneNumber, 0, 1) == "8"){
            $phoneNumber = "0".$phoneNumber;
        }

		return $phoneNumber;
    }

    public static function asNumber($string)
    {
        return preg_replace("/[^0-9]/", "", $string );
    }

    public static function clearCurrencyFormat($input)
    {
        $instance = Currency::getInstance();
        return $instance->clearFormat($input);

    }

 
   
    
}