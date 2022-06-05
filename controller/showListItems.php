<?php
include_once "ListItems.php";
include_once "controller/Database.php";
$list = new ListItems();
$list->drowListItems();

if (isset($_POST["checkItems"])) {
    Item::delete_in_bd($_POST["checkItems"]);
}