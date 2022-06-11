<?php
//include_once "ListItems.php";
include_once "Database.php";
include_once './model/Item.php';
include_once './view/DrawListItems';

if (isset($_GET["register_true"])) {
    if ($_GET["register_true"] == 'no') {
        echo 'Добавление товара прошло неуспешно, такой sku уже существует';
    }
}

$list = new DrawListItems();
$list->drowListItems();
if (isset($_POST["checkItems"])) {
    Item::delete_in_db($_POST["checkItems"]);
}
