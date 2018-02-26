<?php

include '..\connect.php';
//include '..\UploadFile\saveimage.php';

if (isset($_POST['indsaet'])) {
    //UploadImage($_FILES);
	$fornavnFromForm = $_POST['fornavnFromForm'];
	$efternavnnameFromForm = $_POST['efternavnFromForm'];
	$titel = $_POST['titel'];
	$broedtext = $_POST['broedtext'];
	$dag = date('d');
	$maaned = date('m');
    $aar = date('y');
    

	$mysqli->query("INSERT INTO $table2_db (fornavn, efternavn, titel, broedtext, dag, maaned, aar) VALUES ('$fornavnFromForm', '$efternavnnameFromForm', '$titel', '$broedtext', '$dag', '$maaned', '$aar')");
}

$mysqli->close();

?>
<a href="hentdata_k.php"> Se alle blogindlæg </a><br>
<form method="post">
<label>Fornavn: </label>
<input id="fornavnnameFroForm" name="fornavnFromForm" placeholder="Fornavn" type="text">
<label>Efternavn: </label>
<input id="efternavnnameFroForm" name="efternavnFromForm" placeholder="Efternavn" type="text">
<br><br>
<label> Titel: </label>
<input id="titel" name="titel" placeholder="Titel" type="text">
<br>
<textarea name="broedtext" id="Broedtext" cols="30" rows="10"></textarea>
<input name="indsaet" type="submit" value=" Indsæt ">

<!--Upload Images
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
    <tbody>
        <tr>
            <td><input name="uploadedimage" type="file"></td>
        </tr>
</table>
</form>
-->