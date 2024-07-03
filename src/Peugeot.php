<?php

class Peugeot extends Vehicule
{
    private string $carburant;

    public function carburant()
{
    return ('Essence');
}

public function nbTtest()
{
    return parent::nbTest()+70;
}
}