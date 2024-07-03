<!-- Créer une classe Renault qui hérite de Vehicule avec les propriétés et méthodes suivantes :

Propriété privée $carburant.
Redéfinir la méthode carburant() pour qu'elle retourne la chaîne "diesel".
Redéfinir la méthode nbTest() pour qu'elle retourne la valeur de nbTest() de la classe parente (Vehicule) augmentée de 30. -->

<?php
require_once './Vehicule.php';

class Renault extends Vehicule
{
private string $carburant;

public function carburant()
{
    return ('Diesel');
}

public function nbTtest()
{
    return parent::nbTest()+30;
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
}