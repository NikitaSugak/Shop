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
        if (isset($params['value'])) {
            $this->setWeight($params['value']);
        } else {
            $this->setWeight($params['weight']);
        }
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
        echo "Weight " . $this->getWeight(). " KG";
    }

    public function save_in_bd()
    {
        $sql = "INSERT INTO shop.items (`sku`, `name`, `price`, `type`, `value`) VALUES ('". $this->getSku() ."', '". $this->getName() ."', '". $this->getPrice() ."', 'book', '". $this->getWeight() ."')";
        Database::executeSql($sql);
    }
}