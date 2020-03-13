<?php


//require 'sqlconnect.php'; 

try {

    $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'angelique', 'Coupoledeau12');
       

} catch (Exception $e) {
        die('erreur: '. $e->getMessage());
}


$resultat = $pdo->query('SELECT * FROM clients WHERE card=1 order by firstName asc limit 2');

while ($donnees = $resultat->fetch())
{
    echo $donnees['firstName'] . '<br>';

}

    $results->closeCursor();
?>