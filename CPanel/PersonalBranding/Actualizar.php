<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Personal"];
$prime_cambio= str_replace("\r\n", "<br />", $datos);

$sql="UPDATE personalbranding set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../PersonalBranding.php?accion=update");
}
    else
    {
        header("location:../PersonalBranding.php?accion=error");
    }

?>