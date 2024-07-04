<?php

abstract class Vehicule
{
    protected int $nbTest = 100;

    final public function demarrer():string
    {
        return ('Le véhciule est démarrée');
    }

    abstract public function carburant();

    public function nbTest()
    {
        return $this->nbTest;
    }
}
