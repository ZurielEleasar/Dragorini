<?php
$mensaje=null;
if(isset($_GET['accion'])){			
  if($_GET['accion']=="update"){		
    $mensaje="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Enhorabuena!</strong> Se ha actualizado correctamente el contenido de la pagina
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }	
  if($_GET['accion']=="error"){		
    $mensaje="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong> Es posible que la base de datos tenga un problema
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
}
require_once "Config/Conexion.php";
$conexion= new Conexion(); 
$consulta = "SELECT * from contacto";
$i=0;
$idc="";
$imagen="";
$telefono="";
$correo="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $idc=$datos['id'];
                          $imagen=$datos['imagen'];
                          $telefono=$datos['telefono'];
                          $correo=$datos['correo'];
						}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Dashboard | Contacto</title>

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
      <li class="nav-item">
        <a class="nav-link" href="login/principal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
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
       <li class="nav-item active">
        <a class="nav-link" href="Contacto.php">
          <i class="fas fa-id-card"></i>
          <span>Contacto</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">


      	  <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Dragorini ©</span>
          </div>
        </div>
      </footer>

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
  
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Seccion de Contacto</h1>
        </div>

        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <!-- Aqui empieza el desmadre-->
        <div class="pt-3 pb-2 mb-3 border-bottom">
        <?php echo $mensaje;?>
        <h4>Contenido Publicado en la seccion de Contacto de la pagina web</h4>
         
        <form action="Contacto/Actualizar.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" name="correo" class="form-control" value="<?php echo $correo ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nuevo correo" required>
    <small id="emailHelp" class="form-text text-muted">Es el correo que esta publicado en la pagina web.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="text" name="telefono" class="form-control" value="<?php echo $telefono ?>" id="exampleInputPassword1" placeholder="Ingrese el nuevo numero de telefono" required>
    <small id="emailHelp" class="form-text text-muted">Es el numero de telefono que esta publicado en la pagina web.</small>
  </div>
                                    <h4 class="card-inside-title">Imagen de contacto</h4>
                                    <div class="form-group">
                                        <div class="form-line">
                                           <input type="file" name="imagen" class="form-control"/>
                                        </div>
                                    </div>


          <button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Actualizar</button>
         
         <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">¿Esta seguro que quiere actualizar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Una vez actualizado la seccion de Fotografia y Produccion Multimedia no se podra revertir los cambios
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
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

        </div><!-- /*container-fluid-->
    </div><!-- /*content-wrapper-->
  </div> <!-- /*wrapper-->
    

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
