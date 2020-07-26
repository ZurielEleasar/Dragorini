<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Fotografia"];
$prime_cambio= str_replace("\r\n", "<br />", $datos);

$sql="UPDATE fotografiaproduccionmultimedia set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../Fotografia.php?accion=update");
}
    else
    {
        header("location:../Fotografia.php?accion=error");
    }

?>