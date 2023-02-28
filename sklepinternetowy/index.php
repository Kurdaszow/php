<?php
require_once "systemClass.php";
require_once "layoutClass.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    SystemClass::printHead("./styles/main.css");
    ?>
</head>

<body>
    <?php
LayoutClass::printHeader();

?>
<div class="space"></div>
<div class="hero">
    <div class="hero__container">
        <h1>Witamy W Sklepie</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
        <button type="submit">Learn More</button>
    </div>
</div>
<div class="space"></div>
<div class="carts">

<div class="carts__container"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
<div class="carts__container"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
<div class="carts__container"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
    

</div>
<div class="space"></div>
<?php
LayoutClass::printFooter();
?>
</body>

</html>