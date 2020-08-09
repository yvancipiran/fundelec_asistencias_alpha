<?php require"js/NoCSRF-master/nocsrf.php"; ?>
<?php include "views/partials/header_login.php" ?>

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0 mt-2 lead" >Acceso corporativo</h6>

    <form class="form mt-3" action="controllers/valida_usuario.php" method="POST" style="margin-left: 5%; margin-right:5%;">

    <input type="text" name="_token" value="<?php echo NoCSRF::generate('_token'); ?>" hidden>

    <label class="label lead" for="usuario" style="text-shadow:1px 1px 3px black">Nombre de usuario</label>
    <input class="form-control ml-3" name="usuario" id="usuario" type="text" >

    <label class="label lead mt-2" for="clave" style="text-shadow:1px 1px 3px black">Clave de acceso</label>
    <input class="form-control ml-3" name="clave" id="clave" type="password">

    <hr>
    <button class="btn btn-success" type="submit">Acceder</button>
    </form>

    <small class="d-block text-right mt-3">
      <a href="#">Utilice su número de personal y su clave de acceso, luego presione el botón acceder</a>
    </small>
  </div>


<?php include "views/partials/footer.php" ?>