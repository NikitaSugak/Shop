<?php
include_once 'php/Model/Book.php';
include_once 'php/Model/Furniture.php';
include_once 'php/Model/Disc.php';

class listItems
{
    private $items = [];

    private function setList()
    {
        
       /*  try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
         */
        $sql = 'SELECT * FROM shop.items';
        $result = Database::executeSql($sql);
        while ($row = $result->fetch()) {
            $this->items[] = new (ucfirst($row['type']))($row);            
        }
    }

    public function drowListItems()
    {
        $this->setList();
        echo "<div class='container'>";
        for ($i = 0; $i < count($this->items); $i++) {
            echo "<div class='tile'>";
            echo "<input type='checkbox' id='.delete-checkbox' class='delete-checkbox' name='checkItems[]' value ='" . $this->items[$i]->getId() . "'> ";
            echo $this->items[$i]->getId();
            $this->items[$i]->printAboutItem();
            $this->items[$i]->printValue();
            echo "</div>";
        }
        echo "</div>";
    }
}
