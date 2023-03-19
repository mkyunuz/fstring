<?php

namespace Mkyunuz\FString\Contract;

interface NumberInterface 
{

    /**
     * Pembulatan angka terdekat ke atas. contoh : input = 120, round = 50 akan menghasilkan = 150
     * @param float $input
     * @param int $round
     * @return int
     */
    public static function roundUp(float $input, int $round = 0);

     /**
      * Pembulatan angka terdekat ke bawah.  contoh : input = 120, round = 50 akan menghasilkan = 100
     * @param float $input
     * @param int $round
     * @return int
     */
    public static function roundDown(float $input, int $round = 0);

}