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
        if (isset($params["value"])) {
            $this->setSize($params['value']);
        } else {
            $this->setSize($params['size']);
        }
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
        echo "Size " . $this->getSize() . " MB";
    }

    public function save_in_bd()
    {
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->getSKU() ."', '". $this->getName() ."', '". $this->getPrice() ."', 'disc', '". $this->size ."')";
        Database::executeSql($sql);
    }
}