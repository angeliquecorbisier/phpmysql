<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

  <?php
  
require 'sqlconnect.php'; 


$results = $pdo->query('SELECT * FROM crudbasic');

while($donnees = $results->fetch()) 
    echo $donnees['name']. ' '. $donnees['difficulty']. ' '. $donnees['distance'] . '</br>';

    $results->closeCursor();


  ?>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>
