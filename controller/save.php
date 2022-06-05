<?php
include_once '../model/book.php';
include_once '../model/furniture.php';
include_once '../model//disc.php';
include_once "Database.php";

if (isset($_POST["save"])) {
    $params = array("id" => "0", "sku" => $_POST["sku"], "name" => $_POST["name"], "price" => $_POST["price"], "size" => $_POST["size"] , "weight" => $_POST["weight"] , "height" => $_POST["height"] ,  "width" => $_POST["width"] , "length" => $_POST["length"]);
    $item = new (ucfirst($_POST["productType"]))($params);
    $item->save_in_bd(); 
}

header('Location: ' . '..');