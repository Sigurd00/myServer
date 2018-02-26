<?php
session_start();

	if (isset($_POST['knap'])) {
		$_SESSION['fornavn'] = $_POST['inputfnavn'];
		$_SESSION['efternavn'] = $_POST['inputenavn'];
		header('Location: ' . 'put_array.php');
	}
?>

<html>
	<body style="background-color: lawngreen;">
		<form method="post">
			Hvad er dit fornavn? <input type="text" name="inputfnavn"><br>
			Hvad er dit efternavn? <input type="text" name="inputenavn"><br>
			<input type="submit" name="knap" value="Send navn">
		</form>
	</body>
</html>