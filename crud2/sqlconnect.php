<?php

try {

$pdo = new PDO('mysql:host=localhost;dbname=crud2', 'root', '');


} catch (Exception $e) {
    die('erreur: '. $e->getMessage());

}


?>


