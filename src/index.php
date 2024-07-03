<?php

require_once './Vehicule.php';
require_once './Renault.php';
require_once './Peugeot.php';

$renaultCar= new Renault;
$peugeotCar= new Peugeot;



echo $renaultCar->carburant();
echo '<br>';
echo $peugeotCar->carburant();
echo '<br>';
echo $peugeotCar->demarrer();
echo '<br>';
echo $renaultCar->demarrer();
echo '<br>';
echo $peugeotCar->nbTest();
echo '<br>';
echo $renaultCar->nbTest();