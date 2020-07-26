<?php
require_once "CPanel/Config/Conexion.php";
$conexion= new Conexion(); 
?>
<!doctype html>
<html lang="es" prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://dragorini.com/css/style.css">
   <link rel="stylesheet" href="https://dragorini.com/style.css">
   <title>Dragorini  Empresa de marketing</title>
   <meta name="description" content="Dragorini es una Empresa de marketing. Social Media - Diseño web - Content Marketing - Personal Branding - Medios de comunicación">
   <meta name="keywords" content="Marketing digital, Diseño web, Diseño grafico, Medio de comunicación, Social media">
   <link rel="canonical" href="https://dragorini.com/">
   <meta property="og:locale" content="es_ES">
   <link rel="image_src" href="https://dragorini.com/Resource/LogowebAl.png"/>
   <meta property="og:title" content="Dragorini - Empresa de marketing">
   <meta property="og:description" content="Dragorini es una Empresa de marketing. Social Media - Diseño web - Content Marketing - Personal Branding - Medios de comunicación">
   <meta property="og:image" content="https://dragorini.com/Resource/LogowebAl.png" />
   <meta property="og:image:alt" content="Dragorini">
   <meta property="og:site_name" content="Empresa de marketing">
   <meta property="og:type" content="website" />
   <META name="robots" content="index">
   <meta property="og:url" content="https://dragorini.com/"/>
   <meta name="google-site-verification" content="ZuwPFZ8Ldui-t035WO9BsMmMQWY8vwhO1EWBF3KbZXQ">
   <link rel="shortcut icon" href="https://dragorini.com/Resource/Landing_LogoBarra.png"/>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145058407-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145058407-1');
</script>


 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script defer src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <!-- JAVASCRIPT PARA FORMULARIO-->
<script>


      $(document).ready(function() {
        
          $(document).ajaxStart(function() {
              $('.cargando').show();
              $('.resultado').hide();
          }).ajaxStop(function() {
              $('.cargando').hide();
              $('.resultado').fadeIn('slow');
          });
        
          $('.form-contacto').submit(function() {
      
              $.ajax({
                  type: 'POST',
                  url: $(this).attr('action'),
                  data: $(this).serialize(),
                 
                  success: function(data) {
                      $('.resultado').html(data);
					  
					  $('#exampleModal').modal('show');
                  }
              })        
              return false;
          }); 
      })  
  

</script>		
<!-- TERMINA JAVASCRIPT PARA FORMULARIO-->	


  

    <title>Dragorini</title>
	<link rel="shortcut icon" href="https://dragorini.com/Resource/Landing_LogoBarra.png" />
    <style>
#nombre::placeholder {
  color:white;
}
#telefono::placeholder {
  color:white;
}
#email::placeholder {
  color:white;
}
    .pink
    {
        background:url(https://dragorini.com/Resource/Landing-02.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0.1%;
        
    }

    .pink-footer
    {
        /*background:url(https://dragorini.com/Resource/Landing-04.png); */
        background-color: #cd0a85;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0.1%; 
    }
    .color
    {
        background: #cd0a85;
    }

    .separador
    {
        text-align: justify;
        padding-top: 25%;
        padding-left: 5%;
    }

/*Cosas de sergio*/
.ImagenDerechaSocialMedia{
  text-align: right;
  position: relative;
}
.SocialMediaIzquierda{
  text-align: left;

}
.ImagenSocialMedia{
  width: 400px;

}
.ImagenSocialMediaDerecha{
  width: 500px;

}

.SocialMedia{
  background-color: #d4c6cf;
}

.servicio
{
  margin-left: 32%;
  padding-top: 3%;
}

.d
{
    display: block;
    margin-left: auto;
    margin-right: auto;
}


/* Slider */

.row_cuadro {
		background-color: white;
		padding: 2% 0;
	}
/*Termina Slider*/
    </style>
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet" type="text/css" >
  </head>
  <body>

    <div class="container-fluid color fixed-top" style="border-bottom: 1px solid white; position: fixed;">
       
        <nav class="navbar  navbar-expand-md navbar-dark color container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://dragorini.com/Resource/Landing_LogoBarra.png" width="90" height="50" alt="">
              </a>
            <button id="mostrar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
 


            <div id="ocultar" class="collapse navbar-collapse target" id="navbarSupportedContent">
              <ul  class="navbar-nav ml-auto text-center mr-5">
                <li class="nav-item active">
                    <a  id="ocultar" href="#inicio" style="color:#F7F1F0"; class="nav-link my-1 mr-1">Inicio<span class="sr-only">(current)</span></a>
                  </li>
      
                  <li class="nav-item">
                    <a  id="ocultar1" data-scroll href="#servicios" style="color:#F7F1F0" class="nav-link my-1 mr-1" href="#">Servicio</a>
                  </li>
      
                  <li class="nav-item">
                      <a id="ocultar2" data-scroll href="#clientes" style="color:#F7F1F0"; class="nav-link my-1 mr-1" href="#">Clientes</a>
                  </li>
      
                  <li class="nav-item">
                      <a id="ocultar3" data-scroll href="#contactos" style="color:#F7F1F0"; class="nav-link my-1 mr-1" href="#">Contactos</a>
                  </li>
      
                  <li class="nav-item">
                      <a title="Facebook Dragorini" href="https://www.facebook.com/dragorini" target="_blank"><img src="https://dragorini.com/Resource/Landing_facebook.png" class="img-fluid my-2 mr-1" width="32px" height="32px"  alt="Nuestro Facebook"></a>
                  </li>
                  <li class="nav-item">
                  	  <a title="Facebook Dragorini" href="https://www.instagram.com/dragorininetworks"  target="_blank"><img src="https://dragorini.com/Resource/Landing_Instagram.png" class="img-fluid my-2 mr-1" width="32px" height="32px" alt="Nuestro Instagram"> </a>
                  </li>
                 
              </ul>
            </div>
          
          </nav>
     </div>
 <!--Inicio-->
 <?php
$consulta = "SELECT * from inicio";
$idc="";
$imagenI="";
$Titulo="";
$Contenido="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $idc=$datos['id'];
                          $imagenI=$datos['imagen'];
                          $Titulo=$datos['titulo'];
                          $Contenido=$datos['contenido'];
						}
?>
     <div style="background-color: #cd0a85;padding-top: 8%;">
            <div class="row pink">

                    <div class="col-xs-12 col-md-12 col-lg-6 col-sm-12 col-xl-6" id="inicio">
                        <div class="container-fluid">
                            <div class="separador">
                                    <h1 class="display-4" style="text-align: left; color:#F7F1F0; font-weight: bolder;font-family: Gilroy-Light,serif;"><?php echo $Titulo;?></h1>
                                    
                                <p style="font-size: 20px; text-align: left; color:#F7F1F0;"><?php echo $Contenido?></p>
                            </div>      
                        </div>
                    </div>          
                    <div class="col-xs-12 col-md-12 col-lg-6 col-sm-12 col-xl-6">
                            <img src="Resource/Fondos/<?php echo $imagenI;?>" width="100%" height="85%" class="img-fluid  d-sm-block">
                    </div>
                  </div>  
     </div>
     <!--Fin Inicio--> 
      
      <!--Servicios-->

      <div class="container-fluid" style="height: auto;margin-bottom: 60px;
      margin-top: 25px;" id="servicios">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-xl-12">
                  <img class="d" src="https://dragorini.com/Resource/Landing20.png"width="auto" height="auto" alt="">          
                </div>
<?php
$consulta = "SELECT * from servicios";
$idc="";
$servicios="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $idc=$datos['id'];
                          $servicios=$datos['contenido'];
						}
?>
              <div style="position: absolute";> 
                <img class="servicio" src="https://dragorini.com/Resource/Landing_Servicios.png" width="35%" height="60%" alt="" srcset="">
                  <br>         
                  <p class="text-center" style="font-size: 20px";><?php echo $servicios; ?></p>
              </div>           
                
            </div>
        </div> 
        <!--Fin Servicios-->
    
    <!--Social Media-->
    <?php
$consulta_social = "SELECT * from socialmedia";
$idS="";
$social="";
$imagenSN="";
				$resultado_social=array_filter($conexion->seleccionarValores($consulta_social));
						foreach($resultado_social as $datos){
                          $idS=$datos['id'];
                          $imagenSN=$datos['imagen'];
                          $social=$datos['contenido'];
						}
?>
    <section style="background-color: #cd0a85;" class="gray-bg section-padding" id="servicios">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-xl-7">
                        <img style="text-align: left;" src="https://dragorini.com/Resource/Landing_TituloSocialMedia.png" alt="" srcset="">

                        <p style="color:#F9F3F3; font-size: 20px; padding-top: 45px; padding-left: 40px;"; class="lead"><?php echo $social; ?></p>
                    </div>
                    
                    <div class="col-xs-12 col-md-5 col-xl-5">
                      <img style="float: right;" src="Resource/<?php echo $imagenSN;?>" alt="" srcset="">
                       
                    </div>
                </div>
            </div>
        </section>
        <!--Fin Social Media/-->

        <!--Diseño Web-->
        <?php
$consulta_web= "SELECT * from disenoweb";
$idw="";
$web="";
$imagenW="";
				$resultado_web=array_filter($conexion->seleccionarValores($consulta_web));
						foreach($resultado_web as $datos){
                          $idw=$datos['id'];
                          $imagenW=$datos['imagen'];
                          $web=$datos['contenido'];
						}
?>
        <section style="background-color: #FBFCFC;" class="gray-bg section-padding" id="servicios">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-6 col-xl-6">
                      <img src="Resource/<?php echo $imagenW; ?>"  width="70%" alt="" srcset="">
                </div>

                    <div class="col-xs-12 col-md-6 col-xl-6">
                        <img style="position: relative; float: right; padding-top: 10%" src="https://dragorini.com/Resource/Piezas_TituloDiseñoWeb.png" width="90%"  alt="" srcset="">
                        <p  style="color:#030101; text-align: right; float: right; font-size: 20px; padding-top: 35px;"><?php echo $web; ?></p>
                    </div>                   
                </div>
            </div>
        </section>
        <!--Fin Diseño Web/-->

        <!--Contend Marketing-->
        <?php
$consulta_CM= "SELECT * from contentmarketing";
$idCM="";
$CM="";
$imagenCM="";
				$resultado_CM=array_filter($conexion->seleccionarValores($consulta_CM));
						foreach($resultado_CM as $datos){
                          $idCM=$datos['id'];
                          $imagenCM=$datos['imagen'];
                          $CM=$datos['contenido'];
						}
?>
        <section  style="background-color: #cd0a85;" class="gray-bg section-padding" id="servicios">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-xl-8">
                            <img style="text-align: left; margin-left: -20px;" src="https://dragorini.com/Resource/Landing-033.png" alt="" srcset="">
                            <p  style="color:#F9F3F3;margin-left: 30px; font-size: 20px; padding-top: 25px;"><?php echo $CM;?></p>
                        </div>
                        <div class="col-xs-12 col-md-4 col-xl-4">
                       <img style="float: left;" src="Resource/<?php echo $imagenCM; ?>" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </section>
        <!--Fin Contend Marketing/-->

        <!--Desarrollo Personal-->
        <?php
$consulta_PB= "SELECT * from personalbranding";
$idPB="";
$PB="";
$imagenPB="";
				$resultado_PB=array_filter($conexion->seleccionarValores($consulta_PB));
						foreach($resultado_PB as $datos){
                          $idPB=$datos['id'];
                          $imagenPB=$datos['imagen'];
                          $PB=$datos['contenido'];
						}
?>
        <section  style="background-color: #FBFCFC;" class="gray-bg section-padding" id="servicios">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-6 col-xl-5">
                      <img src="Resource/<?php echo $imagenPB; ?>"  alt="" srcset="">         
                    </div>    
                    <div class="col-xs-12 col-md-6 col-xl-7">
                        <img style="position: relative; float: right; padding-top: 10%" src="https://dragorini.com/Resource/Landing-15.png" width="90%"  alt="" srcset="">
                        
                        <p  style="color:#030101; text-align: right; float: right; font-size: 20px; padding-top: 30px;"><?php echo $PB; ?></p>
                    </div>
                 </div>
            </div>
        </section>
        <!--FIN DESARROLLO PERSONAL/-->
        
        <!--Medios de Comunicacion-->
        <?php
$consulta_MDC= "SELECT * from mediosdecomunicacion";
$idMDC="";
$MDC="";
$imagenMDC="";
				$resultado_MDC=array_filter($conexion->seleccionarValores($consulta_MDC));
						foreach($resultado_MDC as $datos){
                          $idMDC=$datos['id'];
                          $imagenMDC=$datos['imagen'];
                          $MDC=$datos['contenido1'];
						}
?>
        <section  style="background-color: #cd0a85;" class="gray-bg section-padding" id="servicios">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-7 col-xl-7">
                            <img style="text-align: left;" src="https://dragorini.com/Resource/Landing_TituloMedios.png" alt="" srcset="">
                          <p  style="color:#F9F3F3; font-size: 20px; padding-top: 25px; padding-left: 25px;"><?php echo $MDC ?></p>
                        </div>           
                        <div class="col-xs-12 col-md-5 col-xl-5">
                          <img style="margin: -8%; float: right; padding-left: 150px; padding-right: 1px; margin-right: -4px;" src="Resource/<?php echo $imagenMDC;?>" width="100%" height="70%"   alt="" srcset="">
                           
                        </div>
                    </div>
                </div>
            </section>
        <!--FIN Medios de Comunicacion-->

        <!--Fotografias & Medio de comunicacion-->
        <?php
$consulta_FM= "SELECT * from fotografiaproduccionmultimedia";
$idFM="";
$FM="";
$imagenFM="";
				$resultado_FM=array_filter($conexion->seleccionarValores($consulta_FM));
						foreach($resultado_FM as $datos){
                          $idFM=$datos['id'];
                          $imagenFM=$datos['imagen'];
                          $FM=$datos['contenido'];
						}
?>
            <section  style="background-color: #FBFCFC;" class="gray-bg section-padding" id="servicios">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 col-md-5 col-xl-6">
                          <img src="Resource/<?php echo $imagenFM; ?>"  width="70%" alt="" srcset="">
                        </div>
                        <div class="col-xs-12 col-md-7 col-xl-6">
                            <img style="position: relative; float: right; padding-top: 10%" src="https://dragorini.com/Resource/Landing-16.png" width="90%"  alt="" srcset="">
                            <p  style="color:#030101; text-align: right; float: right; font-size: 20px; padding-top: 25px; padding-right: 25px;">- Videos Corporativos<br>
                              <?php echo $FM; ?></p>
                        </div>
                    </div>
                </div>
            </section>
         <!--FIN Fotografias & Medio de comunicacion-->



<!--NombreClientes-->
 <section   class="gray-bg section-padding" id="clientes">
<div  class="container-fluid" style="border-top: 1px solid black; text-align: center;">
  <div class="row">

 <div class="col-xs-12 col-md-12 col-xl-12">
 <img  width="auto" height="auto" src="https://dragorini.com/Resource/Landing-04_cliente.png" alt="" srcset="">
 </div>

 
                          
 </div>
</div>
</section>

<!--FIN NombreClientes-->

         <!--Slider-->

         <div class="row_cuadro">
		            <div class="">
			                <section class="customer-logos slider">
                            <?php
$consulta_C= "SELECT * from clientes";
$idCliente="";
$Clientes="";
				$resultado_C=array_filter($conexion->seleccionarValores($consulta_C));
						foreach($resultado_C as $datos){
                          $idCliente=$datos['id'];
                          $Cliente=$datos['titulo'];
echo <<<HTML
            <div class="slide"><img src="Resource/logosSlider/$Cliente"></div>
HTML;
						}
?>
                            </section>
		            </div>
	    </div>

<!--FIN Slider-->

        <div   class="pink-footer">
                <section  class="gray-bg section-padding"  style="text-align:center;" id="service-page">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-xl-6">
									<img src="https://dragorini.com/Resource/Landing_LogoBarra.png" style="margin-left: auto; margin-right: auto; display:block;" width="60%" height="50" alt="">
									<h1  style="text-align: center; font-weight: 1000; font-size:39px; color: white; font-family: Century Gothic;">Contacto</h1>
                                    <?php
$consulta_Contact= "SELECT * from contacto";
$idContact="";
$Telefono="";
$Correo="";
				$resultado_Contact=array_filter($conexion->seleccionarValores($consulta_Contact));
						foreach($resultado_Contact as $datos){
                          $idContact=$datos['id'];
                          $Telefono=$datos['telefono'];
                          $Correo=$datos['correo'];
						}
?>                           
									
									<img style="width:35px; margin-right: 20px; display: inline-block" src="https://dragorini.com/Resource/phone.png"><p class="text-center" style="color: white; font-size: 20px; display: inline-block;"><?php echo $Telefono; ?></p>
									<br>
									<img style="width:35px; margin-right: 8px; display: inline-block" src="https://dragorini.com/Resource/mail.png"><p class="text-center" style="color: white; font-size: 20px; display: inline-block;"><?php echo $Correo; ?></p>
								</div>
                                <div class="col-x-12 col-md-6 col-xl-6">
                                       
                              			
                                            <div class="container-fluid" id="contactos">
                                                    <h1  style="text-align: center; font-weight: 1000; font-size:39px; color: white; font-family: Century Gothic;">¿Tienes alguna duda?</h1>        
                                                    <p style="color: white; font-size:15px; font-family: Century Gothic; font-weight: normal; margin-top: -10px;">Proporciona tus datos y nos pondremos en contacto lo mas rapido posible</p>
	<section class="FormContact">
													                         <form action="email.php" method="POST" class="form-contacto" name="form-contacto">
                                                           <div class="form-group">
                                                                 <input type="text" id="nombre" name="nombre" style="border:1px solid white; border-radius: 50px; background: transparent; color: white;height: 70px;padding-left: 40px;" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" required>
                                                           </div>
                                                           <div class="form-group">
                                                                 <input  type="email" id="email" name="email" style="border:1px solid white; border-radius: 50px; background: transparent; color: white;height: 70px;padding-left: 40px;" class="form-control"  placeholder="Correo Electronico" required >
                                                           </div>
                                                           <div class="form-group">
                                                                   <input  id="telefono" maxlength="10" name="telefono" style="border:1px solid white; border-radius: 50px; background: transparent; color: white; padding-bottom: 10px;height: 70px;padding-left: 40px;" class="form-control"  placeholder="Telefono" required >
                                                           </div>
														   <p style="text-align: center; color: white; font-size:15px; font-family: Century Gothic; font-weight: normal; margin-top: -10px;">¿Qué servicio te interesa?.</p>
                                                           <div class="form-group">
                                                           <select id="servicio" name="servicio" style="border:1px solid white; border-radius: 50px; background: transparent; color:white; padding-bottom: 10px;height: 70px;padding-left: 40px;" class="form-control">
															 <option  style="background: #cd0a85; color:white;" class="form-control" value="Fotografia y Produccion Multimedia" >Fotografia y Producción Multimedia</option>
															  <option style="background: #cd0a85; color:white;" class="form-control" value="Medios de comunicación">Medios de comunicación</option>
															  <option style="background: #cd0a85; color:white;" class="form-control" value="Personal Branding">Personal Branding</option>
															  <option style="background: #cd0a85; color:white;" class="form-control"value="Content Marketing">Content Marketing</option>
															  <option style="background: #cd0a85; color:white;" class="form-control" value="Diseño web">Diseño web</option>
															  <option style="background: #cd0a85; color:white;" class="form-control" value="Social Media">Social Media</option>
														   </select>
														   </div>
														   <button  type="submit" name="enviar" required id="enviar" value="ENVIAR" style=" border-radius: 57px;border:0;color:#cd0a85;font-weight: bold;font-size: 31px;width: 50%;height: 59px;text-align: center;" class="btn btn-light btn-lg" >Enviar</button>
                              
                                          

                                 
                                                   </form>
                                                    <!--DIV DONDE CARGA EL RESULTADO -->
                               <div class="cargando"></div>
                              <div class="resultado"></div>  
                              <!-- TERMINA DIV DONDE CARGA EL RESULTADO -->
</section>
                                                   	
                                            </div>  
                                </div>
                            </div>
                        </div>
                </section>
                

	

			<section style="background-color:#cd0a85; width: 100%; height: 10%; border-top: 2px solid white;" class="gray-bg section-padding" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                  <p style=" text-align: center; color: white;">Copyright © 2019 Dragorini. Derechos reservados.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </section>
        </div>
<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #cd0a85;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white; text-align:center;">Su solicitud ha sido enviada con exito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="https://dragorini.com/Resource/Landing_LogoBarra.png" width="auto" height="50" alt="">
		<p style="color: white; text-align:center;">¡El equipo de Dragorini esta de ansioso de trabajar con usted!<br>
		Pronto platicaremos para generar ideas!<br>
		!Que tenga un excelente dia!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>

<script>
$(document).ready(function(){
		$("#mostrar").click(function(){
			$('.target').show("swing");
		 });
		$("#ocultar").click(function(){
			$('.target').hide("linear");
		});
		$("#ocultar1").click(function(){
			$('.target').hide("linear");
		});
		$("#ocultar2").click(function(){
			$('.target').hide("linear");
		});
		$("#ocultar3").click(function(){
			$('.target').hide("linear");
		});
	});

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        offset: 200;

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
    });
});
</script>


<script type="text/javascript">

</script>

	<!-- jQuery library -->
	
    <script src="https://rawgit.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <!-- jQuery first, then Tether, then Bootstrap JS.  -->
        <script src="https://dragorini.com/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  </body>
</html>