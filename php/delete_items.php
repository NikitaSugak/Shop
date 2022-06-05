<?php
if (isset($_POST["checkItems"])) {
    include_once "../Database.php";
    $idCheckItems = $_POST["checkItems"];
    for ($i = 0; $i < count($idCheckItems); $i++) {
        $sql = "DELETE FROM shop.items WHERE id =  '$idCheckItems[$i]'";
        Database::executeSql($sql);
    }
}
header('Location: ' . '..');
