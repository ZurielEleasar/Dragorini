<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Contenido"];

$prime_cambio= str_replace("\r\n", "<br />", $datos);



$sql="UPDATE inicio set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../Inicio.php?accion=updateC");
}
    else
    {
        header("location:../Inicio.php?accion=errorT");
    }

?>