<html>
  <head>
    <title>DB & PHP test</title>
  </head>
  <body>
	<?php
		$connection = new mysqli("localhost","root","","Disneyland");
		$query = " SELECT nome,denominazione FROM Personaggi,Citta
                   WHERE Personaggi.citta = Citta.sigla ORDER BY nome";
		$result = $connection->query($query);
		if ($result->num_rows != 0) {
			echo "<table border>";
			echo "<tr>";
			echo "<th>Personaggio</th>";
			echo "<th>Citt&agrave;</th>";
			echo "</tr>";
			while ($row = $result->fetch_array()){
				echo "<tr>";
				echo "<td>$row[nome]</td>";
				//echo "<td>$row[0]</td>";
				echo "<td>$row[denominazione]</td>";
				//echo "<td>$row[1]</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		$result->free();
		$connection->close();
	?><br>
	<a href="http://localhost/add.php">
	  Aggiungi un nuovo personaggio.
	</a><br>
    <a href="http://localhost/del.php">
      Elimina un personaggio esistente.
    </a>
 </body>
</html>
