<?php
session_start();
if (isset($_POST['knap'])) {
    $_SESSION['brugernavn'] = $_POST['brugernavn'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: ' . 'index.php');
}
?>

<html>
    <body style="background-color: lawngreen;">
        <form method="post">
            Brugernavn <input type="text" name="brugernavn"><br>
            Password <input type="text" name="password"><br>
            <input type="submit" name="knap" value="Register">
        </form>
    </body>
</html>
