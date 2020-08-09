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

/* FORMULARIO DE REGISTRO DE ENTRADA DE TRABAJADORES */
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
            <input type="text" class="form-control" name="cedula_trabajador" id="cedula_trabajador" required>
          </div>

          <div class="form-group">
            <label for="temp_corporal_ingreso" class="col-form-label">Temperatura Corporal:</label>
            <input type="text" class="form-control" name="temp_corporal_ingreso" id="temp_corporal_ingreso">
          </div>

          <div class="form-group">
            <label class="col-form-label" for="sintoma_febril">¿Presenta sintómas febriles o malestar?:</label>
            <select class="form-control" name="sintoma_febril" id="sintoma_febril" required>
                <option value='' selected>Seleccione... </option>";
                <option value="Niega Tener Síntomas">Niega Tener Síntomas</option>
                <option value="Manifiesta tener síntomas">Manifiesta tener síntomas</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label" for="profilaxis_entrada">¿Desinfección / profilaxis?:</label>
            <select class="form-control" name="profilaxis_entrada" id="profilaxis_entrada" required>
                <option value='' selected>Seleccione... </option>";
                <option value="SI">SI</option>
                <option value="NO">NO</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label" for="bioseguridad_entrada">¿Metodo de bioseguridad al ingreso?:</label>
            <select class="form-control" name="bioseguridad_entrada" id="bioseguridad_entrada" required>
                <option value='' selected>Seleccione... </option>";
                <option value="Solo Tapabocas">Solo Tapabocas</option>
                <option value="Tapabocas y guantes">Tapabocas y guantes</option>
                <option value="Tapabocas, guantes, mascarillas">Tapabocas, guantes, mascarillas</option>
                <option value="Ninguno">Ninguno</option>
            </select>
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

/* FORMULARIO DE REGISTRO DE SALIDA DE TRABAJADORES */
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
        <form action="controllers/registra_salidas.php" method="POST">

          <div class="form-group">
            <label for="cedula_trabajador" class="col-form-label">Cédula del trabajador:</label>
            <input type="text" class="form-control" name="cedula_trabajador" id="cedula_trabajador" required>
          </div>

          <div class="form-group">
            <label for="temp_corporal_salida" class="col-form-label">Temperatura Corporal:</label>
            <input type="text" class="form-control" name="temp_corporal_salida" id="temp_corporal_salida">
          </div>

          <div class="form-group">
            <label class="col-form-label" for="sintoma_febril">¿Presenta sintómas febriles o malestar?:</label>
            <select class="form-control" name="sintoma_febril" id="sintoma_febril" required>
                <option value='' selected>Seleccione... </option>";
                <option value="Niega Tener Síntomas">Niega Tener Síntomas</option>
                <option value="Manifiesta tener síntomas">Manifiesta tener síntomas</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label" for="profilaxis_salida">¿Desinfección / profilaxis?:</label>
            <select class="form-control" name="profilaxis_salida" id="profilaxis_salida" required>
                <option value='' selected>Seleccione... </option>";
                <option value="SI">SI</option>
                <option value="NO">NO</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label" for="bioseguridad_salida">¿Metodo de bioseguridad al salir?:</label>
            <select class="form-control" name="bioseguridad_salida" id="bioseguridad_salida" required>
                <option value='' selected>Seleccione... </option>";
                <option value="Solo Tapabocas">Solo Tapabocas</option>
                <option value="Tapabocas y guantes">Tapabocas y guantes</option>
                <option value="Tapabocas, guantes, mascarillas">Tapabocas, guantes, mascarillas</option>
                <option value="Ninguno">Ninguno</option>
            </select>
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