<?php
require_once "systemClass.php";
require_once "layoutClass.php";
$connection = SystemClass::dbConnect();
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
    LayoutClass::printHeader();

    ?>
    <div class="space2"></div>
    <div class="content">
        <div class="sidebar">
            <div class="sidebar__container">
                <ul>
                    <li>kategoria1</li>
                    <li>kategoria2</li>
                    <li>kategoria3</li>


                </ul>

            </div>
        </div>
        <div class="mainpage">
            <div class="mainpage__container">
<?php
            LayoutClass::getProducts();

?>
            </div>
        </div>

    </div>
</body>

</html>