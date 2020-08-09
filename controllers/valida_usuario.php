<?php
include("../models/conexion.php");

$operador_usuario=pg_escape_string($_POST['usuario']);
$clave_acceso=pg_escape_string($_POST['clave']);


$conexion = new conexion();
$DBH=$conexion->conn_bd_fundelec_asistencias();

session_start();
$_SESSION['usuario_activo']=$operador_usuario;


$sql_valida_usuario="SELECT count(*) FROM accesos_seguridad WHERE operador_usuario='{$operador_usuario}' AND clave_acceso='{$clave_acceso}'";
$STH=$DBH->query($sql_valida_usuario);

while($columna = $STH->fetch()){
    $cantidad = $columna['count'];
}

if ($cantidad=='0') {
    /* Envio al operador a una pagina indicandole que sus datos están errados */
    header("location:../operador_invalido.php");
}else if($cantidad=='1'){
    /* Si los datos existen, envio al operador a la pagina menu.html para que registre las asistencias */
    $sql_nombre_usuario = "SELECT nombres_apellidos FROM accesos_seguridad WHERE operador_usuario = '{$operador_usuario}'";
    $STH=$DBH->query($sql_nombre_usuario);

    while($columna = $STH->fetch()){
        $nombre_usuario = $columna['nombres_apellidos'];
        $_SESSION['nombre_usuario']=$nombre_usuario;
    }

    header("location:../menu.php");
}

?>