<?php
require_once "../Config/Conexion.php";
$conexion= new Conexion(); 
$consulta = "SELECT imagen from Inicio Where id='1'";
$i=0;
$idc="";
$Imagen="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $Imagen=$datos['imagen'];
                        }
                        
$file = "../../Resource/Fondos/".$Imagen;

$nombre_archivo_temporal = $_FILES["imagen"]["tmp_name"];
$nombre_archivo_original = $_FILES["imagen"]["name"];


$destino="../../Resource/Fondos/". basename($_FILES["imagen"]["name"]);
if (move_uploaded_file($nombre_archivo_temporal, $destino))
    {
        $sqlo="update inicio set imagen='$nombre_archivo_original' WHERE id='1'";
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
                    header("location:../Inicio.php?accion=updateI");
                }
            }
            else
            {
                header("location:../Inicio.php?accion=errorB");
            }
    }
        else
        {
            header("location:../Inicio.php?accion=errorMI");
        }

?>