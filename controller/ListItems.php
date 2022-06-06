<?php
include_once './model/Book.php';
include_once './model/Furniture.php';
include_once './model/Disc.php';

class listItems
{
    private $items = [];

    private function setList()
    {
        $sql = 'SELECT * FROM shop.items';
        $result = Database::executeSql($sql);
        while ($row = $result->fetch()) {
            $this->items[] = new (ucfirst($row['type']))($row);            
        }
    }

    public function drowListItems()
    {
        $this->setList();
        for ($i = 0; $i < count($this->items); $i++) {
            echo "<div class='tile'>";
            echo "<input type='checkbox' id='.delete-checkbox' class='delete-checkbox' name='checkItems[]' value ='" . $this->items[$i]->getId() . "'> ";
            $this->items[$i]->printAboutItem();
            $this->items[$i]->printValue();
            echo "</div>";
        }
    }
}
