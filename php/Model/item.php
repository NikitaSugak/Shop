<?php

/**
Class model item
 */
class Item
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

    public function printAboutItem()
    {
        echo $this->sku . "<br />";
        echo $this->name . "<br />";
        echo number_format($this->price, 2, '.', '') . " $" . "<br />";
    }
}
