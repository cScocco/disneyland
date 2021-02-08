<html>
  <head>
    <title>DB & PHP test: DELETE</title>
  </head>
  <body>
  <?php
	$connection = new mysqli("localhost","root","","Disneyland");
	$query = "SELECT nome FROM Personaggi ORDER BY nome";
	$result = $connection->query($query);
	if ($result->num_rows != 0) {
  ?>
   <form action="delete.php" method="GET" ><br>
   Personaggio da eliminare<br>
   <select name="personaggio">
  <?php
	while ($row = $result->fetch_array())
	//echo "<option value=\"$row[0]\">$row[0]</option>";
	echo "<option value=\"$row[nome]\">$row[nome]</option>";
  ?>
  </select><br><br>
  <input type="submit" value="Elimina">
 </form>
  <?php
	}
	else
	echo "Nessun personaggio &egrave; presente nel database.";
	$result->free();
	$connection->close();
  ?>
  </body>
</html>