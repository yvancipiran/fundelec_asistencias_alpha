<?php
session_start();

$cedula_ya_registrada = $_SESSION['cedula_operador'];

$tabla_consulta = "registro_salidas";
$tabla_consulta_entrada = "registro_ingresos";

include "controllers/consultas.php";

$consulta = new consultas;
$informacion_entrada = $consulta->informacion($cedula_ya_registrada, $tabla_consulta_entrada);
$informacion = $consulta->informacion_salidas($cedula_ya_registrada, $tabla_consulta);

?>

<?php include "views/partials/header_login.php" ?>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
  <h3 class="border-bottom border-gray pb-2 mb-0 " style="text-align:center">Información Importante¡</h3>

    <div class="row mt-3">
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
          <div class="card">
              <div class="card-body" style="height:100%;">

                <h2 class="h2" style="text-align: center;">TRABAJADOR YA REGISTRADO</h2>
                <hr>
                <p class="lead" style="text-align: center; margin-top: 3%; ">Ya existe un registro de salida para el trabajador:</p>
                <h2 class="lead px-5" style="text-align: center; margin-top: 1%; "> "<?php echo $informacion ?>"</h2>
                <hr>
                <h3 class="lead" style="text-align: center; font-size:1.7em;">De igual forma:</h3>
                <h2 class="lead px-5" style="text-align: center; margin-top: 1%; "> "<?php echo $informacion_entrada ?>"</h2>
                <hr>
                <p style="text-align: center; margin-top: 3%; ">No se puede registrar hoy nuevamente su asistencia en el sistema</p>

                <a href="menu.php" class="btn btn-primary" style="width:100%" type="submit">Entendido</a>


              </div>
          </div>
      </div>
      <div class="col-12 col-sm-2"></div>

  </div>

    <small class="d-block text-right mt-3">
      <a href="#">Los datos ingresados son invalidos, intente nuevamente o comuniquese con su supervisor inmediato</a>
    </small>
  </div>

</main>
<?php include "views/partials/footer.php" ?>
</body>

</html>