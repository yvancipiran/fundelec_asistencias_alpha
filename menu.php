<?php
session_start();
$usuario = $_SESSION['nombre_usuario'];
?>

<?php include "views/partials/header.php" ?>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0"> Bienvenid@: <?php echo $usuario ?> </h6>


    <div class="row mt-3">
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
          <div class="card">
              <div class="card-body" style="height:100%;">
              <p class="lead" style="text-align: center; text-shadow: 1px 1px 2px black"> ¿Que deseas hacer? </p>
                  <form action="controllers/analiza_tipo_registro.php" method="POST">
                  <button type="button" class="btn btn-secondary" style="width:100%; margin-top:2%; margin-bottom: 2% ;height:70px; font-size: 1.1em;box-shadow:0px 2px 3px black;" data-toggle="modal" data-target="#modal_llegada" data-whatever="@mdo">Registrar Entrada de Trabajador</button>

                  <button type="button" class="btn btn-secondary" style="width:100%; margin-top:2%; margin-bottom: 2% ;height:70px; font-size: 1.1em;box-shadow:0px 2px 3px black;" data-toggle="modal" data-target="#modal_salida" data-whatever="@mdo">Registrar Salida de Trabajador</button>
                  

         <!--              <button class="btn btn-secondary" style="width:100%; margin-top:2%; margin-bottom: 2% ;height:70px; font-size: 1.1em;box-shadow:0px 2px 3px black;" name="tipo_registro" value="entrada" type="submit">Registrar Entrada de Trabajador</button><br>
                      <button class="btn btn-secondary" style="width:100%; margin-top:2%; margin-bottom: 2%; height:70px; font-size: 1.1em;box-shadow:0px 2px 3px black;" name="tipo_registro" value="salida" type="submit">Registrar Salida de Trabajador</button> -->
                  </form>
              </div>
          </div>
      </div>
      <div class="col-12 col-sm-2"></div>

  </div>


    <small class="d-block text-right mt-3">
      <a href="#">Cerrar sesión y salir del sistema</a>
    </small>
  </div>


<div class="modal fade" id="modal_llegada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de llegada de trabajadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controllers/registra_ingreso.php" method="POST">
          <div class="form-group">
            <label for="cedula_trabajador" class="col-form-label">Cédula del trabajador:</label>
            <input type="text" class="form-control" name="cedula_trabajador" id="cedula_trabajador">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="lugar_registro">Lugar por donde Accesa:</label>

            <select class="form-control" name="lugar_registro" id="lugar_registro" required>
                <option value='' selected>Ninguno... </option>";
                <option value="Piso-07">Piso 07</option>
                <option value="Piso-08">Piso 08</option>
                <option value="Piso-09">Piso 09</option>
            </select>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="SUBMIT" class="btn btn-primary">Registrar llegada</button>
        </form>
      </div>
      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="modal_salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Salida de trabajadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controllers/registra_ingreso.php" method="POST">
          <div class="form-group">
            <label for="cedula_trabajador" class="col-form-label">Cédula del trabajador:</label>
            <input type="text" class="form-control" name="cedula_trabajador" id="cedula_trabajador">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="lugar_registro">Lugar por donde se retira:</label>

            <select class="form-control" name="lugar_registro" id="lugar_registro" required>
                <option value='' selected>Ninguno... </option>";
                <option value="Piso-07">Piso 07</option>
                <option value="Piso-08">Piso 08</option>
                <option value="Piso-09">Piso 09</option>
            </select>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="SUBMIT" class="btn btn-primary">Registrar Salida</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>


</main>
<?php include "views/partials/footer.php" ?>
</body>

</html>