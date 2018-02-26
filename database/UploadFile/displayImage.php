<?php
include("..\connect.php");

$result = $mysqli->query("SELECT * FROM $table3_db ORDER BY 'images_id' ASC");	

	while ($row = $result->fetch_assoc()){

 		echo "<img src='". $row['images_path'] ."' width='175px' />";
	}

	echo "<br><br>	"
?>


<a href="upload.php">Tilbage til Upload</a>