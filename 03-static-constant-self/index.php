<?php

require_once './SimulateurCredit.php';
require_once './Mathematique.php';



echo SimulateurCredit::TAUX .'<br>';

echo SimulateurCredit::calculInteret(10000)  .'<br>';



    echo  Mathematique::addition(4, 2)   .'<br>';
    echo Mathematique::division(3,0) .'<br>';
    echo  Mathematique::multiplication(4, 2)  .'<br>';
    echo  Mathematique::soustraction(4, 2)  .'<br>';


