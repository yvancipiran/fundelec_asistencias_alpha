<?php

include("../models/conexion.php");
session_start();
require_once('../js/NoCSRF-master/nocsrf.php');

if(isset($_POST['_token']))
{

    $fund_persona_registra = $_SESSION['usuario_activo'];
    $fund_salida_cedula_operador = pg_escape_string($_POST['cedula_trabajador']);
    $fund_salida_lugar = pg_escape_string($_POST['lugar_registro']);

    $fund_temp_corporal_salida = pg_escape_string($_POST['temp_corporal_salida']);
    $fund_sintoma_febril = pg_escape_string($_POST['sintoma_febril']);
    $fund_profilaxis_salida = pg_escape_string($_POST['profilaxis_salida']);
    $fund_bioseguridad_salida = pg_escape_string($_POST['bioseguridad_salida']);

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
            $query_insertar_datos_salida="INSERT INTO registro_salidas(cedula_operador, lugar_registro, persona_registra, temp_corporal_salida, sintoma_febril, profilaxis_salida, bioseguridad_salida) VALUES('{$fund_salida_cedula_operador}', '{$fund_salida_lugar}', '{$fund_persona_registra}', '{$fund_temp_corporal_salida}', '{$fund_sintoma_febril}', '{$fund_profilaxis_salida}', '{$fund_bioseguridad_salida}')";
            $STH=$DBH->query($query_insertar_datos_salida);
            header("location:../menu.php");
        }

    }else{
        /* Lo envio a una pagina donde indico que el operador no ha registrado la entrada el día de hoy */
        header("location:../usuario_sin_registro_asistencias.php");
    }
}
else
{
    echo "Token Invalido";
}


?>