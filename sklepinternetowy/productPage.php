<?php
require_once "systemClass.php";
require_once "layoutClass.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    SystemClass::printHead("./styles/main.css");
    ?>
    <title>Document</title>
</head>
<body>
    <?php 
    LayoutClass::showProduct();
    
    ?>
</body>
</html>