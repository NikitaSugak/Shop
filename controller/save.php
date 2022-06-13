<?php
include_once '../model/book.php';
include_once '../model/furniture.php';
include_once '../model//disc.php';
include_once "Database.php";
include_once "SaveProduct.php";

if (isset($_POST["save"])) {
    new SaveProduct();
} else {
    header('Location: ' . '..');
}
