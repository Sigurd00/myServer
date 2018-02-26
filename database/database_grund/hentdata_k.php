<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 5px;
	}

</style>

<?php

	include '..\connect.php';
	
	if (isset($_POST['sFornavn'])) {
		$sSort = 'fornavn';
		$order = 'ASC';
	}

	else if (isset($_POST['sEfternavn'])) {
		$sSort = 'efternavn';
		$order = 'ASC';
	}
	else if (isset($_POST['sTitel'])) {
		$sSort = 'titel';
		$order = 'ASC';
	}
	
	else if (isset($_POST['sDato'])) {
		$sSort = 'id';
		$order = 'DESC';
	}
	else if (isset($_POST['sLaengde'])) {
		$sSort = 'CHAR_LENGTH(broedtext)'; //Den indsætter bare funktionen efter ORDER BY
		$order = 'DESC';
	}
		
	else {
		$sSort = 'id';
		$order = 'DESC';
	}
	
	$result = $mysqli->query("SELECT id, Fornavn, Efternavn, titel, broedtext, dag, maaned, aar FROM $table2_db ORDER BY $sSort $order");

	echo "Der er ". $result->num_rows ." blogindlæg i din database <br><br>";

		echo "<table>
		<tr>
		<th>Dato</th>
		<th>Forfatter</th>
		<th>Titel</th>
		<th>Text</th>
		</tr>";
		while ( $row = $result->fetch_assoc() )
		   echo "<tr>
			   <td>" . $row['dag'] . "-" . $row['maaned'] . "-" . $row['aar'] . "</td>
			   <td>" . $row['Fornavn'] . " " . $row['Efternavn'] . "</td>
			   <td>" . $row['titel'] . "</td>
			   <td width=400px>" . $row['broedtext'] . "</td>";
	

	while ( $row = $result->fetch_assoc() )
	
$mysqli->close();
?>
<html>
	<body>
		<a href="database_insert_k.php"> Lav blogindlæg </a> <br>
		<form method="post">
			<input name="sFornavn" type="submit" value="Sorter efter forfatter fornavn">
			<input name="sEfternavn" type="submit" value="Sorter efter forfatter efternavn">
			<input name="sTitel" type="submit" value="Sorter efter titel">
			<input name="sDato" type="submit" value="Sorter efter dato">
			<input name="sLaengde" type="submit" value="Sorter efter længde">
		</form>
</html>