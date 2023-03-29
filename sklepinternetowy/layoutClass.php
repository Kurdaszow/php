<?php
session_start();
require_once "systemClass.php";

class LayoutClass
{
    static function printHeader()
    {
        $conditionRender = "";

        if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
            $conditionRender = "
            <li><a href='logout.php'>Wyloguj</a></li>
            ";
        } else {
            $conditionRender = "
            <li><a href='signInPage.php'>Zaloguj</a></li>   
            <li><a href='signUpPage.php'>Zarejestruj</a></li>
            ";
        }
        echo "
        
            <header>
            <div class='header__container'>
                <h4>Logo</h4>
                <nav>
                    <ul>
                    <li><a href='index.php'>Home</a></li>  
                        <li><a>About Us</a></li>
                        <li><a>Contact</a></li>
                        <li><a href='shopPage.php'>Przeglądaj</a></li>  
                        $conditionRender
                    </ul>
                </nav>
            </div>
            </header>
        ";
    }

    static function printFooter(){

        echo "
        <footer>
        <div class='footer__container'>
        <p>this is a test</p>
        
        </div>
        
        </footer>
        ";
    }
    public static function printTile($row){
        $img = $row['img'];
        $price = $row['price'];
        $name = $row['name'];
        $id = $row['id'];
        echo "
        <a href='productPage.php?product_id=$id'>
        <div class='product__tile'>
        <img class='obraz'src='$img' alt='img' />
        <h3>$name</h3>
        <p>$price</p></div>
        
        ";
    }
    public static function getProducts(){
        $connection = SystemClass::dbConnect();
        $sql = "SELECT * FROM product";

    echo "
    <section class='shop__products'>";
    $result = mysqli_query($connection, $sql);
    while($row =mysqli_fetch_assoc($result)){
        LayoutClass::printTile($row);

    }
    echo"</section>";
    $connection -> close();
    }    
    public static function showProduct(){
        $connection = SystemClass::dbConnect();
        $product_id =$_REQUEST['product_id'];
        $sql = "SELECT * FROM product WHERE id=$product_id";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $img = $row['img'];
        $price = $row['price'];
        $name = $row['name'];
        $desc = $row['description'];
        echo "
        
        <div class='product__tile'>
        <img class='obraz'src='$img' alt='img' />
        <h3>$name</h3>
        <p>$desc</p>
        <p>$price</p></div>
        <button type='button'>Dodaj Do Koszyka</button>
        ";



        $connection -> close();
    }

}