<?php


//require 'sqlconnect.php'; 

try {

    $pdo = new PDO('mysql:host=localhost;dbname=crud1', 'root', '');
       

} catch (Exception $e) {
        die('erreur: '. $e->getMessage());
}


// $results = $pdo->query('SELECT * FROM clients WHERE card=1 order by firstName asc limit 2');


// while ($donnees = $results->fetch())
// {
//     echo $donnees['firstName'] . '<br>';

// }

//     $results->closeCursor();

$results = $pdo->query('SELECT * FROM clients WHERE lastName LIKE "M%"');


while ($donnees = $results->fetch())
{
    echo $donnees['lastName'] . '<br>';

}

    $results->closeCursor();
?> 



