
<?php

require 'sqlconnect.php'; 


 //if (isset($_POST['submit'])) {
   //$ville = $_POST['ville'];
   //var_dump($ville);
   //$sql = "DELETE FROM meteo WHERE ville = '$ville'";
   //$data = $pdo->exec($sql);
 //}


// if (isset($_POST['submit'])) {
// $ville = $_POST['ville']; 
// var_dump($ville);
// $sql = "INSERT INTO meteo (ville) VALUES ('$ville')";
// $data = $pdo->exec($sql);
// var_dump($data);
// }





?>

<form method="post" action="index.php">

<div class="input-group">
<label>Ville</label>
<input type="text" name="ville">
</div>

<div class="input-group">
<button class="btn" type="submit" name="submit"> Submit </button>

</form>
<?php
//$results = $pdo->query('SELECT * FROM meteo');

//while($donnees = $results->fetch()) 
  //   echo $donnees['ville']. ' '. $donnees['haut']. ' '. $donnees['bas'] . '</br>';

    // $results->closeCursor();


      



//insert new values in database
//$sql = "INSERT INTO meteo 
//(ville, haut, bas) 
//VALUES 
//('Bruxelles', 27, 13),
//('Liège', 25, 15),
//('Namur', 26, 15),
//('Charleroi', 25, 12),
//('Bruges', 28, 16)";
//$pdo->exec($sql); 
//echo "yes";


//update new values
//$sql = "UPDATE meteo SET ville='Nice' WHERE idville=6";
//$pdo->exec($sql);
//echo "success";

//delete values
//$sql = "DELETE FROM meteo WHERE idville=3";
//$pdo->exec($sql);
//echo "delete";


?>