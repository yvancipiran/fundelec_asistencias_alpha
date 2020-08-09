<?php

include("../models/conexion.php");
session_start();

$fund_persona_registra = $_SESSION['usuario_activo'];
$fund_salida_cedula_operador = pg_escape_string($_POST['cedula_trabajador']);
$fund_salida_lugar = pg_escape_string($_POST['lugar_registro']);
$_SESSION['cedula_operador']= $fund_salida_cedula_operador;

$conexion = new conexion();
$DBH=$conexion->conn_bd_fundelec_asistencias();

/* Primero Valido que el operador ya tiene registrada su asistencia */
$query_valida_operador_registro_entrada="SELECT count(*) FROM registro_ingresos where cedula_operador='{$fund_salida_cedula_operador}' AND fecha_ingreso=NOW()::date";
$STH=$DBH->query($query_valida_operador_registro_entrada);

while($columna=$STH->fetch()){
    $registros_accesos = $columna{'count'}; 
}

/* Si el operador ya registró su asistencia*/
if($registros_accesos == '1'){
    /* Valido que el operador no tenga ya registrada una salida */
    $query_valida_operador_registro_salida="SELECT count(*) FROM registro_salidas where cedula_operador='{$fund_salida_cedula_operador}' AND fecha_salida=NOW()::date";
    $STH=$DBH->query($query_valida_operador_registro_salida);

    while($columna=$STH->fetch()){
        $registros_salidas = $columna['count'];
    }
    
    if($registros_salidas=='1'){
        /* Envio a una pagina que indica que el operador ya posee un registro de salida */
        header("location:../usuario_con_registro_salida.php");
    }else if($registros_salidas=='0'){
        /* Registro el evento de salida */
        $query_insertar_datos_salida="INSERT INTO registro_salidas(cedula_operador, lugar_registro, persona_registra) VALUES('{$fund_salida_cedula_operador}', '{$fund_salida_lugar}', '{$fund_persona_registra}')";
        $STH=$DBH->query($query_insertar_datos_salida);
        header("location:../menu.html");
    }

}else{
    /* Lo envio a una pagina donde indico que el operador no ha registrado la entrada el día de hoy */
    header("location:../usuario_sin_registro_asistencias.php");
}







?>