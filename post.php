<!DOCTYPE html>
<html>
<head>
	<title>Post Method Formulier</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])) {
			$naam = $_POST['naam'];
			$achternaam = $_POST['achternaam'];
			$leeftijd = $_POST['leeftijd'];
			$adres = $_POST['adres'];
			$email = $_POST['email'];

			echo "<p>Naam: $naam</p>";
			echo "<p>Achternaam: $achternaam</p>";
			echo "<p>Leeftijd: $leeftijd</p>";
			echo "<p>Adres: $adres</p>";
			echo "<p>Email: $email</p>";
		}
	?>
	<form method="post">
		<label for="naam">Naam:</label>
		<input type="text" name="naam" id="naam"><br>

		<label for="achternaam">Achternaam:</label>
		<input type="text" name="achternaam" id="achternaam"><br>

		<label for="leeftijd">Leeftijd:</label>
		<input type="text" name="leeftijd" id="leeftijd"><br>
    </form>
		<label>