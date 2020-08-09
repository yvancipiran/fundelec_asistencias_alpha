<?php

session_start();

$seleccion = pg_escape_string($_POST['tipo_registro']);

if($seleccion=='entrada'){
    header("location:../registro_entradas.html");
}else if($seleccion=='salida'){
    header("location:../registro_salidas.html");
}

?>