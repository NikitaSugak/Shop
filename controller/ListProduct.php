<?php
class ListProduct
{
    function __construct()
    {
        if (isset($_GET["register_true"])) {
            if ($_GET["register_true"] == 'no') {
                echo 'Добавление товара прошло неуспешно, такой sku уже существует';
            }
        }
        
        new DrawListItems();
        if (isset($_POST["checkItems"])) {
            Item::delete_in_db($_POST["checkItems"]);
        }
    }
}
