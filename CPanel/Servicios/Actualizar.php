<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Servicios"];

$prime_cambio= str_replace("\r\n", "<br />", $datos);


$sql="UPDATE servicios set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../Servicios.php?accion=update");
}
    else
    {
        header("location:../Servicios.php?accion=error");
    }

?>