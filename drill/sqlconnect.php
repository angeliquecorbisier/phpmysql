<?php


try {

    $pdo = new PDO('mysql:host=localhost;dbname=becode', 'root', '');
       

} catch (Exception $e) {
        die('erreur: '. $e->getMessage());
}





?>