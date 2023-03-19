<?php
namespace Mkyunuz\FString;

class Currency{

    private static $instance = null;
    
    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new static;
        }
        return self::$instance;
    }

    public function isUSFormat($string)
    {
        return preg_match("/^(?!0\.00)\d{1,3}(,\d{3})*(\.\d\d)?$/", $string);
    }

    public function isSpanishFormat($string)
    {
       return preg_match("/^(?!0\.00)\d{1,3}(\.\d{3})*(,\d\d)?$/", $string);
    }

    public function isNormalDecimal($string)
    {
        return preg_match("/^\d*(\.\d\d)?$/", $string);
    }

    public function isCommaDecimal($string)
    {
        return preg_match("/^\d*(,\d\d)?$/", $string);
    }

    public function clearFormat($value)
    {
        if( $this->isSpanishFormat($value) ){
            return str_replace(",", ".", str_replace(".", "", $value));
        } else if( $this->isUSFormat($value)) {
            return str_replace(",", "", $value);
        } else if( $this->isNormalDecimal($value) ){
            return $value;
        } else if( $this->isCommaDecimal($value) ){
            return  str_replace(",", ".", $value);
        } else {
            return str_replace(",", "", str_replace(".", "", $value));
        }

    }

    public function isValidFormat($value) {
        $test = [
            $this->isUSFormat($value), 
            $this->isSpanishFormat($value), 
            $this->isNormalDecimal($value), 
            $this->isCommaDecimal($value)
        ];
                               
        if(!in_array(1, $test)){
            return false;
        }

        return true;
    }
}