<?php
include_once './controller/ListItems.php';

class DrawListItems
{
    function __construct()
    {
        $this->drowListItems();
    }

    function drowListItems()
    {
        $list = new ListItems();

        for ($i = 0; $i < count($list->items); $i++) {
            echo "<div class='tile'>";
            echo "<input type='checkbox' id='.delete-checkbox' class='delete-checkbox' name='checkItems[]' value ='" . $list->items[$i]->getId() . "'> ";
            echo $list->items[$i]->getSku() . "<br />";
            echo $list->items[$i]->getName() . "<br />";
            echo number_format($list->items[$i]->getPrice(), 2, '.', '') . " $" . "<br />";
            echo $list->items[$i]->printValue() . "<br />";
            echo "</div>";
        }
    }
}
