<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>


    <h1>Liste des randonnées</h1>
    <table>  
    
    <?php
  
require 'sqlconnect.php';



$results = $pdo->query('SELECT * FROM crudbasic');

while($donnees = $results->fetch()) 
    echo $donnees['name']. ' '. $donnees['difficulty']. ' '. $donnees['distance'] . ' ' . $donnees['duration'] . ' ' . $donnees['height_difference'] . '</br>';

   $results->closeCursor();


   
?>

<p>Mauvaise manip ? Changez les données via ce lien <a href="update.php">clique ici</a>. 


    </table>
  </body>
</html>

