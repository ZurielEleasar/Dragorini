<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["SocialMedia"];

$prime_cambio= str_replace("\r\n", "<br />", $datos);


$sql="UPDATE socialmedia set contenido='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../SocialMedia.php?accion=update");
}
    else
    {
        header("location:../SocialMedia.php?accion=error");
    }

?>