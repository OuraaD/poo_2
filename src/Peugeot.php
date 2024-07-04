<?php

require_once './Vehicule.php';
require_once './Engine.php';

class Peugeot extends Vehicule implements Engine
{
    private string $carburant;

    public function carburant()
    {
        return ('Essence');
    }

    public function nbTest()
    {
        return parent::nbTest() + 70;
    }

    public function start(User $user): string
    {
        return  "{$user->getPseudo()} à démarré la Peugeot";
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
