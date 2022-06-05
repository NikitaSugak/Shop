<?php
include_once 'Model/book.php';
include_once 'Model/furniture.php';
include_once 'Model/disc.php';

if (isset($_POST["save"])) {

    $productType = $_POST["productType"];
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];

    //$item = new (ucfirst($_POST["productType"]))(0, $_POST["sku"], $_POST["name"], $_POST["price"], $height . 'x' . $width . 'x' . $length)

    switch ($productType) {
        case 'furniture':
            $height = $_POST["height"];
            $width = $_POST["width"];
            $length = $_POST["length"];

            $item = new Furniture(0, $sku, $name, $price, $height . 'x' . $width . 'x' . $length);
            try {
                $item->save_in_bd();
                header('Location: ' . '..');
            } catch (Exception $e) {
                echo "<html ><script>alert('An error has occurred. Remember that the SKY must be unique.')</script></html>";
            }
            break;
        case 'disc':
            $size = $_POST["size"];

            $item = new Disc(0, $sku, $name, $price, $_POST["size"]);
            try {
                $item->save_in_bd();
                header('Location: ' . '..');
            } catch (Exception $e) {
                echo "<html ><script>alert('An error has occurred. Remember that the SKY must be unique.')</script></html>";
            }
            break;
        case 'book':
            $weight = $_POST["weight"];
            $item = new Book(0, $sku, $name, $price, $weight);

            try {
                $item->save_in_bd();
                header('Location: ' . '..');
            } catch (Exception $e) {
                echo "<html ><script>alert('An error has occurred. Remember that the SKY must be unique.')</script></html>";
            }
            break;
    }
}
