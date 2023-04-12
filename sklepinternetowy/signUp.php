<?php
session_start();

require_once"systemClass.php";
$connection = SystemClass::dbConnect();

if ($connection->connect_errno == 0) {
    $usermail = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $userPassword = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
    $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $userCPassword = htmlentities($_POST['confirmpassword'], ENT_QUOTES, "UTF-8");
    $tos = htmlentities($_POST['tos'], ENT_QUOTES, "UTF-8");
    $sql = sprintf(
        "SELECT * FROM users WHERE email='%s' AND password='%s'",
        mysqli_real_escape_string($connection, $username),
        mysqli_real_escape_string($connection, $usermail),
        mysqli_real_escape_string($connection, $userPassword)
    );


    if ($result = $connection->query($sql)) {
        
        if ($userPassword == $userCPassword and strlen($userPassword)>=8 and $tos='true') {
            // $sql = "INSERT INTO 'users'('id', 'username', 'email', 'password') VALUES (null,'$username','$usermail','$userPassword')";
            $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (null, '$username', '$usermail', '$userPassword')";
            if ($connection->query($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
            unset($_SESSION['signUp']);
            header('Location: index.php');

        } else {

            $_SESSION['signUp'] = true;
            header('Location: signUpPage.php');
        }
    }

    $connection->close();
}
?>