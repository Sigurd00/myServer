<?php
session_start();

if (!isset($_SESSION['fornavn'])) {
	header('Location: ' . 'session.php');
}

$fornavn = $_SESSION['fornavn'];
$efternavn = $_SESSION['efternavn'];

$_SESSION['navne'][$fornavn] = $efternavn;
ksort($_SESSION['navne']);

foreach ($_SESSION['navne'] as $key => $value) {
	echo $key . ' - ' . $value . "<br>";
}

if (isset($_POST['destruer'])) {
	session_destroy();
	header('Location: ' . 'index.php');
}

?>

<html>
	<body style="background-color: lawngreen;">
		<a href="index.php">
			Tilbage
		</a>

		<form method="post">
			<input type="submit" name="destruer" value="Destruer">
		</form>
	</body>
</html>