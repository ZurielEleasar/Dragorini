<?php
$mensaje=null;
if(isset($_GET['accion'])){			
  if($_GET['accion']=="agregar"){		
    $mensaje="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Enhorabuena!</strong> Se agrego correctamente el nuevo cliente
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }	
  if($_GET['accion']=="error"){		
    $mensaje="<div class='alert alert-danger alert-dismissible' role='alert'>
    <strong>Ah ocurrido un error!</strong> Es posible que haya un error en el servidor
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }

  if($_GET['accion']=="eliminado"){		
    $mensaje="<div class='alert alert-success alert-dismissible' role='alert'>
    <strong>Elimado Correctamente!</strong> Se ha eliminado correctamente
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
}
require_once "Config/Conexion.php";
$conexion= new Conexion(); 
$consulta = "SELECT * from clientes";
$i=0;
$idc="";
$servicios="";
				$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
						foreach($resultado_consulta as $datos){
                          $idc=$datos['id'];
                          $servicios=$datos['titulo'];
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

    <title>Dashboard | Clientes</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>

    <script>
		function eliminar(articulo){
			if(confirm("¿Está seguro de eliminar al cliente? Los cambios no pueden revertirse")){
				location.href="Clientes/eliminar.php?id="+articulo;
			}
		}
	</script>
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
          <a class="dropdown-item" href="login/cerrar.php" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
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
       <li class="nav-item active">
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
            <h1 class="h2">Seccion de Clientes</h1>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <!-- Aqui empieza el desmadre-->

          <div class="pt-3 pb-2 mb-3 border-bottom" style="text-align: center">
          <?php echo $mensaje;?> 
          <h4>Agregar un nuevo cliente</h4>
            <br>
            <button type="button" class="btn btn-outline-success btn-lg btn-block"  data-toggle="modal" data-target="#exampleModalCenter">Nuevo Cliente</button>
            <br>
          </div>

          <table class="table table-striped"  style="text-align: center">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col" >Accion</th> 
                  </tr>
               </thead>
              <tbody>
              
<?php
$consulta = "SELECT * from clientes";
$i=0;
$idc="";
$servicios="";
$resultado_consulta=array_filter($conexion->seleccionarValores($consulta));
            foreach($resultado_consulta as $datos)
            {
                          $idc=$datos['id'];
                          $servicios=$datos['titulo'];
                          $i++;
echo<<<HTML
                <tr>
                  <th scope="row">$i</th>
                  <td><img src="../Resource/logosSlider/$servicios" class="img-thumbnail" style="width:150px" alt="Responsive image"></td>
                  <td style="vertical-align: inherit;"> <button type="button" onclick="eliminar($idc)" class="btn btn-danger btn-lg btn-block">Eliminar</button></td>
                </tr>
HTML;
                        }
                        ?>       



                  
                

       
              </tbody>
            </table>
          
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
                if (this.width.toFixed(0) != 300  && this.height.toFixed(0) != 300) {
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
      <div class="modal-body">
        <div style="text-align: center; font-size: x-large;" >
        <p>Antes de agregar un nuevo cliente, asegurese que la imagen deba de tener</p><p class="text-danger"> 300 px de ancho y 300 px de alto</p>
        <div>
        <form action="Clientes/AgregarCliente.php" method="post" enctype="multipart/form-data">
        <h2 class="card-inside-title">Imagen de la Oferta</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                           <input type="file" name="imagen" id="imagen" class="form-control"/>
                                        </div>
                                    </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Agregar</button>
        </form>
      </div>
    </div>
  </div>
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
