<?php
include_once "php/ListItems.php";
$list = new ListItems();
$list->drowListItems();

if (isset($_POST["checkItems"])) {
    Item::delete_in_bd($_POST["checkItems"]);
}