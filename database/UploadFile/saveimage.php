<?php
include("..\connect.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
if (!empty($files["uploadedimage"]["name"])) {

	$file_name=$files["uploadedimage"]["name"];
  $file_size=$files["uploadedimage"]["size"];
	$temp_name=$files["uploadedimage"]["tmp_name"];
	$imgtype=$files["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename= $files["uploadedimage"]["type"]; 
	$target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

  $mysqli->query("INSERT INTO $table3_db ( images_path ) VALUES ('$target_path')");


	
}else{

   exit("Error While uploading image on the server");
} 

}

?>

<a href="displayImage.php">Vis indhold af databse</a>