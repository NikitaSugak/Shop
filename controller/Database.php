<?php

/**
Class model book
 */
class Database
{
    public static function executeSql($sql)
    {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        
        return $conn->query($sql);
    }
}