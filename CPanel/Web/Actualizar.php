<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Web"];
$prime_cambio= str_replace("\r\n", "<br />", $datos);


$sql="UPDATE disenoweb set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../Web.php?accion=update");
}
    else
    {
        header("location:../Web.php?accion=error");
    }

?>