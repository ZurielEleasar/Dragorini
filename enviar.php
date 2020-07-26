<?php
 $destino="zurieleleasar@gmail.com";
 $nombre=$_POST["va1"];
 $correo=$_POST["var2"];
 $telefono=$_POST["var3"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\ntelefono: ".$telefono;
 mail($destino,"Contacto", $contenido);
 header("Location: index.php");

?>