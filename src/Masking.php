<?php

namespace Mkyunuz\FString;

use Mkyunuz\FString\Abstracts\BaseFString;
use Mkyunuz\FString\Contract\FStringInterface;

trait Masking {

    public static function asPhone($input)
    {
        $pattern = '/[^0-9]/';
		$replacement = '';
		$phoneNumber = preg_replace($pattern, $replacement, $input);
		$prefixPhone = substr($phoneNumber, 0, 3);

		if($prefixPhone == "628"){
            $phoneNumber = "08".substr($phoneNumber, 3);
        }

		if(substr($phoneNumber, 0, 1) != "0" && substr($phoneNumber, 0, 1) == "8"){
            $phoneNumber = "0".$phoneNumber;
        }

		return $phoneNumber;

    }

    public static function asCurerncy($value, $sparator)
    {

    }

    public static function clearCurrencyFormat()
    {

    }

   
    
}