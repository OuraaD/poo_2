<?php

require_once './Vehicule.php';
require_once './Renault.php';
require_once './Peugeot.php';
require_once './User.php';

$renaultCar= new Renault;
$peugeotCar= new Peugeot;
$user= new User;
$user->setPseudo('Kenza');
$user2= new User;
$user2->setPseudo('Aïcha');




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
echo '<br>';
echo $peugeotCar->start($user);
echo '<br>';
echo $renaultCar->start($user2);


// $affiche=new Wolf('Sully',3,2,['pain','ordure','connerie'],true);