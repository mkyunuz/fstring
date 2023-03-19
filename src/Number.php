<?php
namespace Mkyunuz\FString;

use Mkyunuz\FString\Contract\NumberInterface;

class Number implements NumberInterface {

    private static $instace = null;

    public static function getInstance()
    {
        if(self::$instace == null) 
        {
            self::$instace = new static;
        }

        return self::$instace;
    }

    
    public static function roundUp(float $input, int $round = 0) 
    {
        $number = FString::asNumber($input);
		$_round = $round; 
		$result = (ceil(($number)) % (int)$round == 0) ? 
		            ceil((int)$number) : 
		            round(((int) $number + ((int) $_round) / 2) / (int) $_round) * (int) $_round;
		 return $result;

	}


    public static function roundDown(float $input, int $round = 0) 
    {
        $number = FString::asNumber($input);
		$_round = $round; 
		$result = (ceil(($number)) % (int)$round == 0) ? 
		            ceil((int)$number) : 
		            floor(((int) $number - ((int) $_round) / 2) / (int) $_round) * (int) $_round;
		 return $result;

	}


}