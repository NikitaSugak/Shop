<?php
include_once './model/Book.php';
include_once './model/Furniture.php';
include_once './model/Disc.php';

class ListItems
{
    public $items = [];

    function __construct()
    {
        $sql = 'SELECT * FROM shop.items';
        $result = Database::executeSql($sql);
        while ($row = $result->fetch()) {
            $this->items[] = new (ucfirst($row['type']))($row);            
        }
    }
}
