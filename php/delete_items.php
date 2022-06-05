<?php
if (isset($_POST["checkItems"])) {
    echo 'Connection failed: ' ;
    $idCheckItems = $_POST["checkItems"];
    for ($i = 0; $i < count($idCheckItems); $i++) {
        try {
            $conn = new PDO('mysql:host=localhost', 'root', 'admin');
        } catch(Exception $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
        

        for ($i=0; $i < count($idCheckItems); $i++) { 
            $sql = "DELETE FROM shop.items WHERE id =  '$idCheckItems[$i]'";
            
            $conn->query($sql);
         
            
            
              
        
            
        } 
    }
   
}
header('Location: '. '..');