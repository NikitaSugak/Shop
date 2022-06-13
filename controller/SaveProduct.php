<?php
class SaveProduct
{
    private $skus = [];

    function __construct()
    {
        $this->getSkusFromDb();

        if (in_array($_POST["sku"], $this->skus)) {
            header('Location: ' . '..?register_true=no');
        } else {
            $this->saveProductInDb();
            header('Location: ' . '..');
        }
    }

    function getSkusFromDb()
    {
        $sql = 'SELECT sku FROM shop.items';
        $result = Database::executeSql($sql);
        while ($row = $result->fetch()) {
            $registeredSku[] = $row;
        }

        for ($i = 0; $i < count($registeredSku); $i++) {
            $this->skus[] = $registeredSku[$i]['sku'];
        }
    }

    function saveProductInDb()
    {
        $params = array("id" => "0", "sku" => $_POST["sku"], "name" => $_POST["name"], "price" => $_POST["price"], "size" => $_POST["size"], "weight" => $_POST["weight"], "height" => $_POST["height"],  "width" => $_POST["width"], "length" => $_POST["length"]);
            $item = new (ucfirst($_POST["productType"]))($params);
            $item->save_in_bd();
    }
}
