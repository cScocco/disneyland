<html>
  <head>
    <title>DB & PHP test: DELETE</title>
  </head>
  <body>
  <?php
	$personaggio = $_GET["personaggio"];
	$connection = new mysqli("localhost","root","","Disneyland");
	$query = "DELETE FROM Personaggi WHERE nome = '$personaggio'";
	$result = $connection->query($query);
	$connection->close();
	echo "Il personaggio $personaggio &egrave; stato eliminato dal database.";
  ?><br><br>
   <a href="http://localhost/disneyland.php">
    Visualizza elenco personaggi.
   </a>
  </body>
</html>