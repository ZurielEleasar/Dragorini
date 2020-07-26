<?php
require_once('../Config/Conexion.php');
$conexion= new Conexion();

$id_cliente=$_GET['id'];

$consulta="select titulo from clientes where id ='$id_cliente';";

$resultado=array_filter($conexion->seleccionarValores($consulta));
$i=0;
foreach($resultado as $datos){
	$img=$datos['titulo'];
    $i++;
}

$file = "../../Resource/logosSlider/".$img;

$sql="delete from clientes where id='$id_cliente';";
$resultado=$conexion->ejecutarConsulta($sql);

if ($resultado == '1') {
    
    if (!unlink($file)) 
    {
        echo'<script type="text/javascript">
        alert("Hubo un problema al eliminar);
        window.location.href="../Clientes.php";
            </script>';   
    }
        else
        {
            header("location:../Clientes.php?accion=eliminado");
        }
}
    else
    {
        header("location:../Clientes.php?accion=error");
    }
?>