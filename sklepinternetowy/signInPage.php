<?php
session_start();
require_once"systemClass.php";
SystemClass::blockEntranceSigned("index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php SystemClass::printHead("./styles/main.css") ?>
</head>
<body>
    <form action="signIn.php" method="post"> 
        <label>E-Mail</label>
        <input type="email" name="email" id="">
        <label>Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Zaloguj Się">
    </form>
    <?php 
    if(isset($_SESSION['signInError'])){
        echo "<p>Niepoprawny login lub hasło!</p>";
    }
    ?>
</body>
</html>