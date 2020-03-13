<?php

try {

$pdo = new PDO('mysql:host=localhost;dbname=weatherapp', 'angelique', 'Coupoledeau12');


} catch (Exception $e) {
    die('erreur: '. $e->getMessage());

}


?>