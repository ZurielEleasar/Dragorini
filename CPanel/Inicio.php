<?php
$mensajeT=null;
$mensajeC=null;
$mensajeI=null;
if(isset($_GET['accion'])){			
  if($_GET['accion']=="updateT"){		
    $mensajeT="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Enhorabuena!</strong> Se ha actualizado el Titulo correctamente
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }	

  if($_GET['accion']=="errorT"){		
    $mensajeT="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong>Hubo un problema al actualizar el titulo
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }

  if($_GET['accion']=="updateC"){		
    $mensajeC="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Enhorabuena!</strong> Se ha actualizado el Contenido correctamente
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }	

  if($_GET['accion']=="errorC"){		
    $mensajeC="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong> Hubo un problema al actualizar el Contenido
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }

  if($_GET['accion']=="updateI"){		
    $mensajeI="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Enhorabuena!</strong> Se ha actualizado la imagen correctamente
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }	

  if($_GET['accion']=="errorB"){		
    $mensajeI="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong>Hubo un problema con la base de datos, Contacte al administrador!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }

  if($_GET['accion']=="errorMI"){		
    $mensajeI="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong>Se produjo un error en la Base de datos o al cargar la imagen
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
  
}
require_once "Config/Conexion.php";
$conexion= new Conexion(); 
$consulta = "SELECT * from inicio";
$i=0;
$idc="";
$Imagen="";
$Titulo="";
$contenido="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $idc=$datos['id'];
                          $Imagen=$datos['imagen'];
                          $Titulo=$datos['titulo'];
                          $contenido=$datos['contenido'];
            }
            $Cambio_Titulo= str_replace("<br />", "\r\n", $Titulo);
            $Cambio_Contenido= str_replace("<br />", "\r\n", $contenido);
            
?>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard | Inicio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="ckeditor/ckeditor.js"></script>
 
</head>

  <body>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.html">Dragorini</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
      </li>
    </ul>
  </nav>


  <div id="wrapper">

    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="login/principal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Inicio.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Servicios.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Servicios</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SocialMedia.php">
          <i class="fas fa-mobile"></i>
          <span>Social Media</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Web.php">
          <i class="fas fa-laptop-code"></i>
          <span>Diseño Web</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ContentMarketing.php">
          <i class="far fa-lightbulb"></i>
          <span>Content Marketing</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="PersonalBranding.php">
          <i class="far fa-copyright"></i>
          <span>Personal Branding</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="MedioComunicacion.php">
          <i class="fas fa-microphone"></i>
          <span>Medio de Comunicación</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Fotografia.php">
          <i class="fas fa-icons"></i>
          <span>Fotografía y Producción Multimedia</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Clientes.php">
          <i class="fas fa-user-tie"></i>
          <span>Clientes</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Contacto.php">
          <i class="fas fa-id-card"></i>
          <span>Contacto</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Inicio</h1>
        </div> 

        
          <div class="row">
            <div class="col-md-6">
          <div class="card">
          <div class="card-header">
            Titulo
          </div>
          <div class="card-body">
            <div class="row">
                      <div class="col-md-12">
                          <!-- Aqui empieza el desmadre de titulo-->
                        <div class="border-bottom">
                            <?php echo $mensajeT;?> 
                              <h4>Titulo Publicado en el inicio de  Pagina Web</h4>
                              <br>
                              
                              <div class="form-group" >
                                <textarea style="resize:none;" maxlength="30" class="form-control"  disabled  id="exampleFormControlTextarea1" rows="3"><?php echo $Cambio_Titulo ?></textarea>
                              </div>
                            </div>

                        <div class="pt-3 pb-2 mb-3 border-bottom">
                              <h4>Actualizar Titulo</h4>
                          <form action="Inicio/ActualizarT.php" method="post">
                            
                          <div class="form-group" >
                              <label for="validationCustom03">Solo se permite 30 caracteres para actualizar el titulo</label>
                              <textarea style="resize:none;" name="Titulo" maxlength="30" class="form-control" id="validationCustom03" rows="3" required></textarea>
                              <div class="invalid-feedback">
                                    Please provide a valid city.
                              </div>   
                          </div>

                            <br><br>
                            <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Actualizar Titulo</button>
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">¿Esta seguro que desea actualizar?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  Una vez actualizado esta seccion, no se podra revertir los cambios
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-outline-success">Actualizar </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
           
          </div>
        </div>
        </div>

        <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login/cerrar.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Contenido
            </div>
            <div class="card-body">
                <!-- Aqui empieza el contenido a actualizar-->
                <div class="border-bottom">
                <?php echo $mensajeC;?> 
                  <h4>Contenido Publicado en inicio de la Pagina Web</h4>
                  
                    <div class="form-group" >
                                <textarea style="resize:none;" maxlength="100" class="form-control"  disabled  id="exampleFormControlTextarea1" rows="3"><?php echo $Cambio_Contenido; ?></textarea>
                    </div>
                  </div>

                <div class="pt-3 pb-2 mb-3 border-bottom">
                  <h4>Actualiza el contenido</h4>
                  <form action="Inicio/ActualizarC.php" method="post">
                    <div class="form-group" >
                              <label for="exampleFormControlTextarea1">Solo se permite 30 caracteres para actualizar el titulo</label>
                              <textarea style="resize:none;" name="Contenido" maxlength="100" class="form-control" id="exampleFormControlTextarea1" rows="3"required></textarea>
                          </div>
                    <br><br>
                    <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter1">Actualizar Contenido</button>
                    
                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">¿Esta seguro que quiere actualizar?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body">
                          Una vez actualizado esta seccion, no se podra revertir los cambios
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-outline-success">Actualizar</button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
             


            </div>
          </div>
          
        </div>
        </div>
          

          <div class="col-md-12 pt-3">
            <div class="row">
              <div class="card">
                <div class="card-header">
                  Imagen
                </div>
                <div class="card-body">
                  <div class="pt-3 pb-2 mb-3 border-bottom">
                  <?php echo $mensajeI;?> 
                    <h4>Imagen Publicada en el inicio de la Pagina Web</h4>
                    <img src="../Resource/Fondos/<?php echo $Imagen?>" alt="" srcset="" style="width:35%; height:85%;">
                  </div>
<script>
            var banderaTamano = false;

            function validar() {
              var o = document.getElementById('imagen');
              var foto = o.files[0];
              var c = 0;

              if (o.files.length == 0 || !(/\.(jpg|png|jpeg)$/i).test(foto.name)) {
                alert('Ingrese una imagen con alguno de los siguientes formatos: .jpeg/.jpg//.png.');
                return false;
              }
               
              // Si el tamaño de la imagen fue validado
              if (banderaTamano) {
                return true;
              }

              var img = new Image();
              img.onload = function dimension() {
                if (this.width.toFixed(0) != 754  && this.height.toFixed(0) != 671) {
                  $('#exampleModalCenter3').modal('show')
                } else {
                  alert('Imagen correcta :)');
                  // El tamaño de la imagen fue validado
                  banderaTamano = true;
                  
                  // Buscamos el formulario
                  var form = document.getElementById('formulario');
                  // Enviamos de nuevo el formulario con la bandera modificada.
                  form.submit();
                }
              };
              img.src = URL.createObjectURL(foto);
              
              // Devolvemos false porque falta validar el tamaño de la imagen
              return false;
            }
            </script>

                  <div class="pt-3 pb-2 mb-3 border-bottom">
                  <form action="Inicio/ActualizarImg.php" method="post" onSubmit="return validar()"  enctype="multipart/form-data">
                  <h2 class="card-inside-title">La nueva Imagen debera de tener 754 px de alto por 671 px de ancho</h2>
                      <div class="form-group">
                          <div class="form-line">
                            <input type="file" name="imagen" id="imagen" class="form-control" required/>
                          </div>
                      </div>
                      <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter2">Actualizar Imagen</button>
                     <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">¿Esta seguro que quiere actualizar?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Una vez actualizado la imagen, no se podra revertir los cambios
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-success">Actualizar</button>
                          </div>
                        </div>
                      </div>
                    </div>





<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hay un problema con la imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ninguna-camara.png" style="display:block; margin:auto;"alt="" srcset="">
       <p class="text-center" style="font-size:23px; font-family:auto;">
       Lamentablemente la imagen no cumple con las especificaciones de Altura y Anchura.<br>
        Para esta seccion se necesita una imagen de:<br>

        Altura: 754 Pixeles<br>
        Anchura: 671 Pixeles
       </p> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


                  </form>

                  </div>


                </div>
              </div>
            </div>
          </div>
          
         

       <!-- Aqui empieza el imagen a actualizar-->

      
    </div> <!--/.container-fluid-->

    </div><!--/.content-wrapper-->


  </div><!--/.wrapper-->

  

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="js/popper.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script defer src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    

  </body>
</html>
