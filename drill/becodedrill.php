<?php


require 'sqlconnect.php'; 


//exo 1, 2, 3

// $results = $pdo->query('SELECT * FROM students');

// while($donnees = $results->fetch()) 
//     echo $donnees['nom']. ' '. $donnees['prenom']. ' '. $donnees['datenaissance'] . ' '. $donnees['school'] . '</br>';

//     $results->closeCursor();


// exo 4

// $results = $pdo->query('SELECT * FROM students WHERE genre = "F"');

// while($donnees = $results->fetch()) 
//     echo $donnees['nom']. ' '. $donnees['prenom']. ' '. $donnees['datenaissance'] . ' '. $donnees['genre'] . '</br>';

//     $results->closeCursor();



// exo 6

// $results = $pdo->query('SELECT * FROM students ORDER BY prenom ASC LIMIT 0,2');

// while($donnees = $results->fetch()) 
//     echo $donnees['prenom'].'</br>';

//     $results->closeCursor();

// exo 7



// insert new values in database
$sql = "INSERT INTO students (nom, prenom) VALUES ('Ginette', 'Dalor')";
$pdo->exec($sql); 
echo "yes";



?>

 