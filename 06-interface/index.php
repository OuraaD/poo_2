<?php 
require_once './Wolf.php';
require_once './Bird.php';

$animal= new Bird('Sully',3,2,['pain','ordure','connerie'],true);

$affiche=new Wolf('Sully',3,2,['pain','ordure','connerie'],true);

echo $affiche->eatBird($animal);