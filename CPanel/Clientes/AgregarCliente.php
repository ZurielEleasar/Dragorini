<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$nombre_archivo_temporal = $_FILES["imagen"]["tmp_name"];
$nombre_archivo_original = $_FILES["imagen"]["name"];

$destino="../../Resource/logosSlider/". basename($_FILES["imagen"]["name"]);

if (move_uploaded_file($nombre_archivo_temporal, $destino)) {

    $sql="insert into clientes(titulo) values('$nombre_archivo_original')";
   $resultado=$conexion->ejecutarConsulta($sql);
   if($resultado == '1'){

    header("location:../Clientes.php?accion=agregar");

   }
else
{
    if(!unlink($destino))
    {
        echo'<script type="text/javascript">
							alert("Hay un error en el servidor");
							window.location.href="../Clientes.php";
						</script>';

    }
        else
    {
        header("location:../Fotografia.php?accion=error");
        }
}
}
?>