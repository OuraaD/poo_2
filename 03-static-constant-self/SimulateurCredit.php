<?php

class SimulateurCredit
{
    const  TAUX =20.5;

    public static float $quotient=0.4;

    public static function calculInteret(int $pret): float{

        return $pret * self::$quotient;
    }
}