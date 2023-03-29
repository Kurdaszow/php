<?php
require_once"systemClass.php";
require_once"config.php";
session_start();
$connection = SystemClass::dbConnect();

if($connection -> connect_errno === 0){
    $userEmail = htmlentities($_POST['email'],ENT_QUOTES, 'UTF-8');
    $userPassword = htmlentities($_POST['password'],ENT_QUOTES, 'UTF-8');

    $sql = sprintf(
    "SELECT * FROM users WHERE email='%s' AND password='%s'",
    mysqli_real_escape_string($connection, $userEmail),
    mysqli_real_escape_string($connection, $userPassword),
    );

    if($result = $connection -> query($sql)){
        if($result -> num_rows > 0) {
            $data = $result -> fetch_assoc();
            $email = $data['email'];
            $firstname = $data['firstname'];
            $_SESSION['signedIn'] = true;
            unset($_SESSION['signedInError']);
            header("location: index.php");

            $result -> close();
        }else{
            $_SESSION['signedInError'] = true;
            header("location: signInPage.php");
        }
    }
    $connection -> close();
}