<?php
// Exercice : Construction d'une Classe PHP POO avec Méthodes Statique
// Objectif

// Instructions
// Créer la classe Mathematique avec les méthodes statiques suivantes :

class Mathematique
{
    public static function addition(float $nbr1, float $nbr2): float
    {
        return $nbr1 + $nbr2;
    }

    public static function division(float $nbr1, float $nbr2): float | string
    {
        if(self::isNotNull($nbr2)){

            return $nbr1 / $nbr2;
        }

        return 'Vous ne pouvez pas diviser par 0';
    }

    public static function multiplication(float $nbr1, float $nbr2): float
    {
        return $nbr1 * $nbr2;
    }

    public static function soustraction(float $nbr1, float $nbr2): float
    {
        return $nbr1 - $nbr2;
    }

    private static function isNotNull(float $nbr): bool
    {
        if ($nbr == 0) {
            return false;
        } else {
            return true;
        }
    }
}





// addition : prend 2 paramètres (float) et retourne le résultat.
// division : prend 2 paramètres (float) et retourne le résultat.
// multiplication : prend 2 paramètres (float) et retourne le résultat.
// soustraction : prend 2 paramètres (float) et retourne le résultat.
// isNull : méthode statique privée qui prend un paramètre (float) et retourne false si le paramètre est égal à 0, sinon retourne true.

// La méthode division doit appeler la méthode isNull pour vérifier si le second paramètre est égal à 0. La division ne doit se faire que si la méthode isNull retourne true.

// Testez chaque méthode statique de la classe Mathematique pour vous assurer qu'elles fonctionnent comme prévu. Faites attention aux cas où la division par zéro est tentée, et vérifiez que la méthode isNotNull est correctement appelée et gérée.