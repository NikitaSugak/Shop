<?php

/**
Class model item
 */
abstract class Item
{
    private $id;
    protected $sku;
    protected $name;
    protected $price;

    function __construct($params)
    {
        $this->setId($params['id']);
        $this->setSku($params['sku']);
        $this->setName($params['name']);
        $this->setPrice($params['price']);
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setSku($sku)
    {
        $this->sku = $sku;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    function getSku()
    {
        return $this->sku;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    abstract function printValue();

    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
    }

    public static function delete_in_db($idCheckItems)
    {
        for ($i = 0; $i < count($idCheckItems); $i++) {
            $sql = "DELETE FROM shop.items WHERE id =  '$idCheckItems[$i]'";
            Database::executeSql($sql);
        }
        
        header('Location: ' . '..');
    }
}
