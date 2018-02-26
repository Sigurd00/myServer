<?php defined('DS') OR die('No direct access allowed.');
//Users
if ((isset($_SESSION['brugernavn'])) && (isset($_SESSION['password']))) {

$brugernavn= $_SESSION['brugernavn'];
$password = $_SESSION['password'];

$_SESSION['users'][$brugernavn] = $password;
}


//$users = array("infoscience" => "2017", "Jacob Skadborg" =>"Sigurd");

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . SELF);
}

if(isset($_POST['username'])) {
    if($_SESSION['users'][$brugernavn] !== NULL && $_SESSION['users'][$brugernavn] == $_SESSION['users']['password']) {
  $_SESSION['username'] = $brugernavn;
  header('Location:  ' . SELF);
    }
    elseif(isset($_POST['register'])) {
      header('location: ' . 'register.php');
    }
        else{
        //invalid login
        foreach ($_SESSION['users'] as $key => $value) {
          echo $key . ' - ' . $value . "<br>";
        echo "<p>error logging in</p>";
        }
    }
}

echo '<form method="post" action="'.SELF.'">
  <h2>Login</h2>
  <p><label for="username">Username</label> <input type="text" id="username" name="username" value="" /></p>
  <p><label for="password">Password</label> <input type="password" id="password" name="password" value="" /></p>
  <p><input type="submit" name="submit" value="Login" class="button"/></p>
  <p><input type="submit" name="register" value="Register" class="button"/></p>
  </form>';
exit; 
?>