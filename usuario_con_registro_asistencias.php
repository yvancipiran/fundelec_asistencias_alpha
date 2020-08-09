<?php

session_start();

$cedula_ya_registrada = $_SESSION['cedula_operador'];
$tabla_consulta = "registro_ingresos";

include "controllers/consultas.php";

$consulta = new consultas;
$informacion = $consulta->informacion($cedula_ya_registrada, $tabla_consulta);


?>

<?php include "views/partials/header_login.php" ?>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Acciones</h6>

    <div class="row mt-3">
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
          <div class="card">
              <div class="card-body" style="height:100%;">
                <h2 class="h2" style="text-align: center;">TRABAJADOR YA REGISTRADO</h2>
                <h2 style="text-align: center; margin-top: 1%; "> "<?php echo  $informacion ?>"</h2>
                <p style="text-align: center; margin-top: 3%; ">No se puede registrar hoy nuevamente su hora de llegada</p>
                <br>
                <div class="card-footer">
                <a class="btn 
                btn-success" href="menu.php" style="width:100%">Entendido</a>
                </div>

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