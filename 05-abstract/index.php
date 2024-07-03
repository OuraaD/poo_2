<?php

require_once './Player.php';
require_once './Warrior.php';
require_once './Mage.php';


$warrior12=new Warrior('Hulk', 12);
$warrior12->hit();
echo $warrior12->getLife();
echo '<br>';

$mage1=new Mage('Black Panther','30');
$mage1->hit();
echo $mage1->getLife();
echo '<br>';