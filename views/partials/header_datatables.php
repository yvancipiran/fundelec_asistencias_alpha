<?php
session_start();
$usuario = $_SESSION['nombre_usuario'];
$operador_usuario=$_SESSION['usuario_activo'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <!-- CSS personalizado --> 
  <link rel="stylesheet" href="css/modelo.css">
  <link href="css/offcanvas.css" rel="stylesheet">
    
  <!--datables CSS básico-->
  <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.bootstrap4.min.css"/>
  <!--datables estilo bootstrap 4 CSS-->  
  <link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
         
  <!--font awesome con CDN-->  
  <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">  
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">


    <title>FUNDELEC&reg | Control de Accesos</title>


    <!-- Bootstrap core CSS -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light" style="background: url('img/fondos/fondo_principal.jpg') no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;-o-background-size: cover;">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">FUNDELEC&reg |    </a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">General</a>
          <a class="dropdown-item" href="#">Permanencias</a>
        </div>
      </li> -->

      <li class="nav-item ml-2">
        <a class="nav-link" href="menu.php">Menú Principal</a>
      </li>

    </ul>

      <a href="../../controllers/cerrar_sesion.php" class="btn btn-outline-success my-2 my-sm-0">Cerrar Sesión</a>

  </div>
</nav>

<div class="nav-scroller bg-white shadow-sm" style="box-shadow: 1px 1px 1px grey">
<nav class="nav nav-underline">
<<a class="nav-link active" href="#"> Bienvenid@: <?php echo $usuario ." | NP:".$operador_usuario ?> </a>
<!--   <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Resumen de registros para hoy:</a>
    <a class="nav-link" href="#">
      Entradas
      <span class="badge badge-pill badge-success align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Salidas
      <span class="badge badge-pill badge-warning align-text-bottom">27</span> 
    </a>

  </nav> -->
</div>

<main role="main" class="container mt-1">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow-sm" style="box-shadow: 2px 2px 4px black; text-shadow:1px 1px 3px black; background-color: #3A5899">
    <img class="img mr-3" src="../../img/gti_informatica.gif" alt="logo-gti" width="48" height="48">
    
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">FUNDELEC&reg</h6>
      <small>Control de Accesos</small>
    </div>
  </div>