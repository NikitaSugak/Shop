<?php
include_once 'item.php';

/**
Class model furniture
 */
class Furniture extends Item
{
    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
        echo "Dimension " .$this->value . "<br />";
    }

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'furniture', '". $this->value ."')";

        $conn->query($sql);
    }
}