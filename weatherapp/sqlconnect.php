<?php

try {

$pdo = new PDO('mysql:host=localhost;dbname=weatherapp', 'root', '');


} catch (Exception $e) {
    die('erreur: '. $e->getMessage());

}


?>