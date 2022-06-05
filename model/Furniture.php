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
        if (isset($params["value"])) {
            $this->setDimensions($params['value']);
        } else {
            $this->setDimensions($params['height'] . 'x'. $params['width'] . 'x'. $params['length']);
        }
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

    function getDimensions()
    {
        return $this->getHeight() . 'x' .  $this->getWidth() . 'x' . $this->getLength();
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
        echo "Dimension " . $this->getHeight() . "x" . $this->getWidth() . "x" . $this->getLength() . "<br />";
    }

    public function save_in_bd()
    {
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('" . $this->getSKU() . "', '" . $this->getName() . "', '" . $this->getPrice() . "', 'furniture', '" . $this->getDimensions() . "')";
        Database::executeSql($sql);
        header('Location: ' . '..');
    }
}
