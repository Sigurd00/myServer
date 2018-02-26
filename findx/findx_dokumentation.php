<!DOCTYPE html>
<html>
<head>
	<title>Andengradsligning</title>
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
		<div class="overskrift"><h1><center>Andengradsligning</h1></center></div>
		<div class="kommentar">
			<h2>Kommentar</h2>
		I den grønnne boks kan man se hvad koden gør. <br> <br>	
		Under den grønne boks står koden til den. <br>	<br>
		Nederst har jeg indsat et billed af flowcharted som laver en visuallisering af hvad koden gør. I flowcharten har jeg kun brugt php koden, fordi det er der logikken sker <br> <br>
		<b>linje 4-6</b> hvis der er skrevet noget i input boxene, skal det der står i dem, laves til en variabel svarende til input boxen. fx. Hvis man skriver 2 i a, vil den se at der er skrevet 2 i a, og sætte variabel $a til 2. <br>
		<b>linje 8-9</b> Her er diskriminantligningen. <br>
		<b>linje 11-12</b> Hvis diskriminanten er mindre end 0 er der ingen løsning på ligningen. <br>
		<b>linje 13-15</b> Ellers hvis diskriminanten er 0 er der kun 1 løsning, den skriver først "x = " og derefter regner den x ud <br>
		<b>linje 16-21</b> Hvis diskrimanten er over 0, er der 2 løsninger. Først skriver den "x1 =", så regner den x1 ud (+). i <b>linje 19</b> laver den en ny linje og så regner den x2 ud (-). <br>
		<b>linje 24-34</b> er HTML kode. Det vigtigste her er <b>linje 26</b> hvor man laver en form, som har metoden 'post'. I <b>linje 28-31</b> laver vi input boxene og vi laver knappen.
	</div>
		<iframe src="findx.php" width="996px" height="300px"></iframe>
</body>
</html>

<?php
    require('..\viskodeV2.php');
    highlight_file_with_line_numbers('findx.php');

?>
<img src="findx_flowchart.png" width="996px" alt="Her skulle mit flowchart være, men det virker ikke :'(">