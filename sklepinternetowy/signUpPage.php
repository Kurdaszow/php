<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="buttons">
    <form action="signUp.php" method="post">
        <label>Nazwa Użytkownika</label>
        <input type="user" name="username" id="" class="tes">
        <label>Email</label>
        <input type="email" name="email" id="">
        <label>hasło</label>
        <input type="password" name="password" id="">
        <label>powtórz hasło</label>
        <input type="password" name="confirmpassword" id="">
        <input type="submit" value="OK">
        <label><a href="tos.php">regulamin</a></label>
        <input type="checkbox" name="tos">
        <?php
        if (isset($_SESSION['signUp'])) {
            echo "<p style='color: red'>Błąd</p>";
        }
        ?>
    </form>
    </buttons>
</body>

</html>