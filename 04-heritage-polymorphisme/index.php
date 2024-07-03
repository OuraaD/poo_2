
<?php

require_once './Article.php';
require_once './Conserve.php';
require_once './Aliments.php';

$prdt=new Article ('Iphone', '8000.5');

echo $prdt->displayProduct();


$boiteConserve=new Conserve ('Kinder', '8', ['haricots', 'petit pois', 'lentilles','pois-chiche']);

echo '<br>';

echo $boiteConserve->displayProduct();

echo '<br>';


$boiteConserve->setListExcipient(['haricots', 'petit pois', 'lentilles','pois-chiche']);
echo $boiteConserve->liste();

echo '<br>';

$dateperemp=new Aliments('chocolat','5', '2030');
echo $dateperemp->displayProduct();

