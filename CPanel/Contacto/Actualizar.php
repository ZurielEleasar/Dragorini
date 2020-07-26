<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 

$email=$_POST["correo"];
$tel=$_POST["telefono"];


if(empty($_FILES['imagen']['name']))
{
    $sql="UPDATE contacto set telefono='$tel' , correo='$email' WHERE id ='1'";
    $resultado=$conexion->ejecutarConsulta($sql);
    
    if($resultado == '1')
    {
        header("location:../Contacto.php?accion=update");
    }
        else
        {
            header("location:../Contacto.php?accion=error");
        }
    
   
}

else
{
    $nombre_archivo_temporal = $_FILES["imagen"]["tmp_name"];
    $nombre_archivo_original = $_FILES["imagen"]["name"];
    $destino="../Resource/". basename($_FILES["imagen"]["name"]);

    if (move_uploaded_file($nombre_archivo_temporal, $destino))
    {
        $sqlo="update contacto set imagen='$nombre_archivo_original', telefono='$title', correo='$price' WHERE id='1'";
            $resultado1=$conexion->ejecutarConsulta($sqlo);
            
            if($resultado1 =='1')
            {
                if (!unlink($file))
                {
                    echo'<script type="text/javascript">
							alert("Hay un error al tratar de actualizar la imagen. Por favor elimine la oferta y vuelva agregarlo");
							window.location.href="../Ofertas.php";
						</script>';
                }
                else
                {
                    header("location:../Contacto.php?accion=update");
                }
            }
            else
            {
                header("location:../Contacto.php?accion=error");
            }
    }
        else
        {
            header("location:../Contacto.php?accion=error");
        }
}


?>