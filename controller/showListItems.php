<?php
include_once "ListItems.php";
include_once "Database.php";
include_once './model/Item.php';

if (isset($_GET["register_true"])) {
    if ($_GET["register_true"] == 'no') {
        echo 'Добавление товара прошло неуспешно, такой sku уже существует';
    }
}

$list = new ListItems();
$list->drowListItems();
if (isset($_POST["checkItems"])) {
    Item::delete_in_bd($_POST["checkItems"]);
}
