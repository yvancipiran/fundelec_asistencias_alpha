<?php

session_start();

$cedula_no_registrada = $_SESSION['cedula_operador'];

?>

<?php include "views/partials/header_login.php" ?>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
  <h3 class="border-bottom border-gray pb-2 mb-0 " style="text-align:center">Información Importante¡</h3>

    <div class="row mt-3">
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
          <div class="card">
              <div class="card-body" style="height:100%;">

                <h2 class="h2" style="text-align: center;">TRABAJADOR NO REGISTRADO</h2>
                <p class="lead" style="text-align: center; margin-top: 3%; ">No se consiguio coincidencia para el número de cédula</p>
                <h2 style="text-align: center; margin-top: 1%; "> "<?php echo $cedula_no_registrada ?>"</h2>
                <p style="text-align: center; margin-top: 3%; ">Informele al trabajador que debe registrar sus datos en administración para futuros accesos</p>
                <br>
                <div class="card-footer">
                <a class="btn
                btn-danger" href="menu.php" style="width:100%" >Entendido</a>
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