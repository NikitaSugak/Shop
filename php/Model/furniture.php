<?php
include_once 'Item.php';

/**
Class model furniture
 */
class Furniture extends Item
{
    private $height;
    private $width;
    private $length;

    function __construct($params)
    {
        parent::__construct($params);
        $this->setDimensions($params['value']);
    }

    function setDimensions($value)
    {
        $dimensions = explode("x", $value);

        $this->setHeight($dimensions[0]);
        $this->setWidth($dimensions[1]);
        $this->setLength($dimensions[2]);
    }

    function setHeight($height)
    {
        $this->height = $height;
    }

    function setWidth($width)
    {
        $this->width = $width;
    }

    function setLength($length)
    {
        $this->length = $length;
    }

    function getHeight()
    {
        return $this->height;
    }

    function getWidth()
    {
        return $this->width;
    }

    function getLength()
    {
        return $this->length;
    }

    public function printValue()
    {
        echo "Dimension " . $this->getHeight() . "x" . $this->getWidth() . "x". $this->getLength() . "<br />";
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
