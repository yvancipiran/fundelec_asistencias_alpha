<?php

session_start();

?>

<?php include "views/partials/header_login.php" ?>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Información</h6>

    <div class="row mt-3">
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
          <div class="card">
              <div class="card-body" style="height:100%;">
                        
                        <h2 class="h2" style="text-align: center;">USUARIO Y CLAVE INCORRECTOS</h2>
                        <p class="lead" style="text-align: center; margin-top: 3%; ">Los datos que usted ha ingresado son incorrectos, <br> verifiquelos e intentelo de nuevo</p>
                        <h2 style="text-align: center; margin-top: 1%; "> "<?php echo $_SESSION['usuario_activo'] ?>"</h2>
                        <p style="text-align: center; margin-top: 3%; ">Usuario y/o contraseña invalidos</p>
                        <br>
                        <a  class="btn btn-success w-100" href="index.php" style="box-shadow:1px 1px 2px black">Regresar</a>

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