<!DOCTYPE html>
<html>
<head>
	<title>Session Med Dokumentation</title>
<style>
.overskrift {
	background-color :#FFFFCC;
	border: solid 1px;
}
.kommentar {
	position: absolute;
	top: 90px;
	right: 8px;
	font-size: 18px;
	width: 512px;
	padding: 10px;
	background-color: #FFFFCC;
	margin: 0;
	border: solid 1px;
}
</style>

</head>

<body>
		<div class="overskrift"><h1><center>Session & arrays</h1></center></div>
		<div class="kommentar">
			Skriv kommentar her
	</div>
		<iframe src="session.php" width="796px" height="300px"></iframe>
</body>
</html>

<?php
    require('..\viskodeV2.php');
    highlight_file_with_line_numbers('session.php');
    highlight_file_with_line_numbers('put_array.php');
?>
<img src="session_flowchart.png" width="800px" alt="Her skulle mit flowchart være, men det virker ikke :'(">