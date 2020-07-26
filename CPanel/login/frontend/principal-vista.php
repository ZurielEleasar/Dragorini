<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Dragorini</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login/cerrar.php" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="../inicio.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Servicios.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Servicios</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../SocialMedia.php">
          <i class="fas fa-mobile"></i>
          <span>Social Media</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Web.php">
          <i class="fas fa-laptop-code"></i>
          <span>Diseño Web</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../ContentMarketing.php">
          <i class="far fa-lightbulb"></i>
          <span>Content Marketing</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../PersonalBranding.php">
          <i class="far fa-copyright"></i>
          <span>Personal Branding</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../MedioComunicacion.php">
          <i class="fas fa-microphone"></i>
          <span>Medio de Comunicación</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../Fotografia.php">
          <i class="fas fa-icons"></i>
          <span>Fotografía y Producción Multimedia</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../Clientes.php">
          <i class="fas fa-user-tie"></i>
          <span>Clientes</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../Contacto.php">
          <i class="fas fa-id-card"></i>
          <span>Contacto</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Dragorini ©</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

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
          <a class="btn btn-primary" href="cerrar.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
