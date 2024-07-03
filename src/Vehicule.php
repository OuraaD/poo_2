<?php

abstract class Vehicule
{
    private int $nbTest = 100;

    final public function demarrer()
    {
        return ('Le véhciule est démarrée');
    }

    abstract public function carburant();

    public function nbTest()
    {
        return $this->nbTest;
    }
}
