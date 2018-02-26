<?php 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout'])){	
    include('login.php');
}
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


?>

<p>You are logged in as <?php echo $_SESSION['username']; ?> </p>
<p><a href="?logout=1">Logout</a></p>

