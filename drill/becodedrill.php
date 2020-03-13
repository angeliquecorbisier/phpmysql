<?php


//require 'sqlconnect.php'; 

try {

    $pdo = new PDO('mysql:host=localhost;dbname=becode', 'angelique', 'Coupoledeau12');
       

} catch (Exception $e) {
        die('erreur: '. $e->getMessage());
}





?>