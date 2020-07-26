<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$datos=$_POST["Medios"];
$prime_cambio= str_replace("\r\n", "<br />", $datos);

$sql="UPDATE mediosdecomunicacion set contenido1='$prime_cambio' WHERE id ='1'";
$resultado=$conexion->ejecutarConsulta($sql);

if($resultado == '1')
{
    header("location:../MedioComunicacion.php?accion=update");
}
    else
    {
        header("location:../MedioComunicacion.php?accion=error");
    }

?>