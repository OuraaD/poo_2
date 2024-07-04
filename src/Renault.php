<!-- Créer une classe Renault qui hérite de Vehicule avec les propriétés et méthodes suivantes :

Propriété privée $carburant.
Redéfinir la méthode carburant() pour qu'elle retourne la chaîne "diesel".
Redéfinir la méthode nbTest() pour qu'elle retourne la valeur de nbTest() de la classe parente (Vehicule) augmentée de 30. -->

<?php

require_once './Vehicule.php';
require_once './Engine.php';

class Renault extends Vehicule implements Engine
{
    private string $carburant;

    public function carburant()
    {
        return ('Diesel');
    }



    /**
     * Get the value of carburant
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set the value of carburant
     *
     * @return  self
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }
    public function nbTest()
    {
        return parent::nbTest() + 30;
    }
    public function start(User $user): string
    {
        return  "{$user->getPseudo()} à démarré la Renault";
    }
}
