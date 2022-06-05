<?php
include_once 'Item.php';

/**
Class model book
 */
class Book extends Item
{
    private $weight;

    function __construct($params)
    {
        parent::__construct($params);
        $this->setWeight($params['value']);
    }

    function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function getWeight()
    {
        return $this->weight;
    }

    public function printValue()
    {
        echo "Weight " . $this->getWeight(). " KG <br />";
    }

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'book', '". $this->value ."')";

        $conn->query($sql);
    }
}