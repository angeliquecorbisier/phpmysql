<?php

try {

$pdo = new PDO('mysql:host=localhost;dbname=hiking', 'root', '');


} catch (Exception $e) {
    die('erreur: '. $e->getMessage());

}


?>


