<?php



$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$servicio = $_POST['servicio'];


    //Verifica campos vacios
    if (empty($nombre) or empty($email) or empty($telefono)) {
            echo "Algunos campos obligados estan vacios."; 
    }

    else{

        $header = 'From: ' .$email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $info = "Este mensaje fue enviado por: "  . $nombre ." \r\n";
        $info .= "Su correo es: " . $email . " \r\n";
        $info .= "Su teléfono es: " . $telefono . " \r\n";
		$info .= "Servicio que solicita: " . $servicio . " \r\n";
        $info .= "Enviado: " . date('d/m/Y', time());

        $para = 'contacto@dragorini.com';
        $asunto = 'Solicito informacion de un servicio:';

        mail($para, utf8_decode($asunto), utf8_decode($info), $header);

        echo ""; 

		}


?>
