<?php

include("../models/conexion.php");
session_start();

$fund_persona_registra = $_SESSION['usuario_activo'];
$fund_acceso_cedula_operador = pg_escape_string($_POST['cedula_trabajador']);
$fund_acceso_lugar = pg_escape_string($_POST['lugar_registro']);
$_SESSION['cedula_operador']= $fund_acceso_cedula_operador;

$conexion = new conexion();
$DBH=$conexion->conn_bd_fundelec_asistencias();

/* Valido que el operador exista en la BD */
$query_valida_operador_existe="SELECT COUNT(*) FROM operador WHERE cedula_operador='{$fund_acceso_cedula_operador}'";
$STH=$DBH->query($query_valida_operador_existe);

while($columna = $STH->fetch()){
    $operador = $columna['count'];
}

if($operador == '0'){
    
    /* Envio al operador a una pagina indicándole que no está registrado en la base de datos del sistema */
    header("location:../usuario_no_registrado.php");

}else{
    /* Valido que el operador no tenga un registro de asistencia hoy */
    $query_valida_operador_registro_entrada="SELECT COUNT(*) FROM registro_ingresos where cedula_operador='{$fund_acceso_cedula_operador}' AND fecha_ingreso=NOW()::date";
    $STH=$DBH->query($query_valida_operador_registro_entrada);

    while($columna = $STH->fetch()){
        $registros_accesos = $columna{'count'}; 
    }

    /* Si el usuario no posee registro activo guardo el registro */
    if($registros_accesos == '0'){
        $query_insertar_datos_ingreso="INSERT INTO registro_ingresos(cedula_operador, lugar_registro, persona_registra) VALUES('{$fund_acceso_cedula_operador}', '{$fund_acceso_lugar}', '{$fund_persona_registra}')";
        $STH=$DBH->query($query_insertar_datos_ingreso);

       header("location:../menu.php");

    }else{
        /* Como el operador ya posee un registro de asistencias hoy le muestro una pagina indicandole que ya tiene registrada su asistencia */
        header("location:../usuario_con_registro_asistencias.php");
    }

}





?>