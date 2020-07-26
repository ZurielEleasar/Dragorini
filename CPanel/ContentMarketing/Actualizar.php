<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Content"];
$prime_cambio= str_replace("\r\n", "<br />", $datos);

$sql="UPDATE contentmarketing set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../ContentMarketing.php?accion=update");
}
    else
    {
        header("location:../ContentMarketing.php?accion=error");
    }

?>