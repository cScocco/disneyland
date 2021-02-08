<html>
  <head>
    <title>DB & PHP test: INSERT</title>
  </head>
  <body>
  <?php
	$personaggio = $_GET["personaggio"];
	$citta = $_GET["citta"];
	$connection = new mysqli("localhost","root","","Disneyland");
	$query = "SELECT * FROM Personaggi WHERE nome = '$personaggio'";
	$result = $connection->query($query);
	if ($result->num_rows != 0)
		echo "Il personaggio $personaggio &egrave; gi&agrave; presente nel database.";
	else {
		$query = "INSERT INTO Personaggi VALUES ('$personaggio','$citta')";
		$connection->query($query);
		echo "Il personaggio $personaggio &egrave; stato aggiunto al database.";
	}
	$result->free();
	$connection->close();
  ?><br><br>
   <a href="http://localhost/disneyland.php">
    Visualizza elenco personaggi.
   </a>
  </body>
</html>
