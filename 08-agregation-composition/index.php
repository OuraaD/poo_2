<?php
require_once './Database.php';
require_once './DatabaseAgregation.php';

$conn =new Database();
$conn->dbConnect();
$pdo=$conn->getPdo();


// Creer une classe DatabaseAgregation
// propriete $pdo de type PDO
    // Constructeur qui prend en paramètre un  objet PDO
        // Initialise la propriété  $pdo grâce au paramètre


        $obj=new PDO('mysql:host=localhost;dbname=library_db','root','',[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        $db =new DatabaseAgregation($obj);
        $db->getPdo();