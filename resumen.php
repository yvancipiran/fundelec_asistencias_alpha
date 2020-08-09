<?php
include("php/conexion.php");
$hoy = date("d-m-yy");

?>
<?php include "views/partials/header_datatables.php"; ?>
  <title>Nombre de la Pagina</title>
  </head>

  <header>

  </header>

  <div style="height:10px"></div>
  
    <!--Ejemplo tabla con DataTables-->
    <div class="container" style="margin-top: 1%; margin-bottom:2%">
    <h1 class="lead">Resumen diario de registros de asistencias</h1>
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="datatable" class="table table-bordered table-striped table-hover bg-light" cellspacing="0" width="100%">
                            <hr>    
                        <caption> <hr> FUNDELEC<sup>&reg</sup> | GERENCIA DE TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN .</caption>  
                        <thead class="thead-dark">
                            <tr style="">
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Cédula</th>
                                <th>Trabajador</th>
                                <th>Entrada</th>
                                <th>Asignado a </th>
                                <th>Estatus </th>
                                <th>Hora de salida </th>
                                <th>Salida </th>
                                <th>Unidad </th>
                            </tr>
                        </thead>
                        <!--tfoot>
                            <tr>
                              <th>Campo1</th>
                              <th>Campo2</th>
                              <th>CampoN</th>
                            </tr>
                        </tfoot-->
                        <tbody>
                          <?php
                          include("php/tablas/tabla_1.php"); 
                          ?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <hr>
  </body>

  <?php include "views/partials/scripts_datatables.php" ?>

</html>
