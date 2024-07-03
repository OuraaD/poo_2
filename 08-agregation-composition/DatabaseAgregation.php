<?php

// Creer une classe DatabaseAgregation
// propriete $pdo de type PDO
// Constructeur qui prend en paramètre un  objet PDO
// Initialise la propriété  $pdo grâce au paramètre


class DatabaseAgregation
{
    /**
     * @var PDO
     */
    
    private PDO $pdo;


    /**
     * @param PDO $pdo
     */

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}
