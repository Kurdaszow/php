<?php

class SystemClass {
    static function printHead($stylespath) {
        echo "
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>sklep</title>
            <link rel='stylesheet' href='$stylespath'>
        ";
    }

    public static function dbConnect() {
        // require_once "config.php";
        $host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name= "php";
        return new mysqli($host, $db_user, $db_password, $db_name);
    }

    public static function blockEntraceNotSigned($move_to) {
        if(!isset($_SESSION['signedIn'])){
            header("Location: $move_to");
        }
    } 

    public static function blockEntranceSigned($move_to) {
        if(isset($_SESSION['signedIn'])){
            header("Location: $move_to");
        }
    } 
}