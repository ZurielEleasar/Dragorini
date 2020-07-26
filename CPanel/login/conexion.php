<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=u870985886_drago', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>