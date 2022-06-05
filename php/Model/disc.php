<?php
include_once 'Item.php';

/**
Class model disc
 */
class Disc extends Item
{
    private $size;

    function __construct($params)
    {
        parent::__construct($params);
        $this->setSize($params['value']);
    }

    function setSize($size)
    {
        $this->size = $size;
    }

    function getSize()
    {
        return $this->size;
    }

    public function printValue()
    {
        echo "Size " . $this->getSize() . " MB <br />";
    }

    public function save_in_bd()
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->sku ."', '". $this->name ."', '". $this->price ."', 'disc', '". $this->value ."')";

        $conn->query($sql);
    }
}