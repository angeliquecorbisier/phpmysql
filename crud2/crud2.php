<?php

require 'sqlconnect.php'; 


	 if (isset($_POST['button'])) {

 $firstname = $_POST['firstname']; 
 $lastname = $_POST['lastname'];
 $birthdate = $_POST['birthdate']; 
 $card = $_POST['card']; 
 $cardnumber = $_POST['cardnumber']; 

 $sql = "INSERT INTO clients (firstname, lastname, birthdate, card, cardnumber) VALUES ('$firstname', '$lastname', '$birthdate', '$card', '$cardnumber')";
 $data = $pdo->exec($sql);
 var_dump($data);
 }

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>

<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="firstname">Firstname</label>
			<input type="text" name="firstname" value="">
		</div>



		<div>
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" value="">
		</div>
		<div>
			<label for="birthdate">Birthdate</label>
			<input type="text" name="birthdate" value="">
		</div>
		<div>
			<label for="card">Card</label>
			<input type="checkbox" name="card" value="1"> Oui
            <input type="checkbox" name="card" value="2"> Non
		</div>

        <div>
			<label for="cardnumber">Cardnumber</label>
			<input type="text" name="cardnumber" value="">
		</div>

		<button type="submit" name="button">Envoyer</button>
	</form>
</body>

</html>