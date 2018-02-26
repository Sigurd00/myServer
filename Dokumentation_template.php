<!DOCTYPE html>
<html>
<head>
	<title>$navn</title>
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
	width: 312px;
	padding: 10px;
	background-color: #FFFFCC;
	margin: 0;
	border: solid 1px;
}
</style>
	
</head>

<body>
		<div class="overskrift"><h1><center>$navn</h1></center></div>
		<div class="kommentar">
			Skriv kommentar her
	</div>
		<iframe src="$file.php" width="996px" height="300px"></iframe>
</body>
</html>

<?php
    require('..\viskodeV2.php');
    highlight_file_with_line_numbers('$file.php');

?>
<img src="$file_flowchart.png" width="996px" alt="Her skulle mit flowchart være, men det virker ikke :'(">