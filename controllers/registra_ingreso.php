<?php

include("../models/conexion.php");
session_start();
require_once('../js/NoCSRF-master/nocsrf.php');

if(isset($_POST['_token'])){

        $fund_persona_registra = $_SESSION['usuario_activo'];
        $fund_acceso_cedula_operador = pg_escape_string($_POST['cedula_trabajador']);
        $fund_acceso_lugar = pg_escape_string($_POST['lugar_registro']);
        $fund_temp_corporal_ingreso = pg_escape_string($_POST['temp_corporal_ingreso']);
        $fund_sintoma_febril = pg_escape_string($_POST['sintoma_febril']);
        $fund_profilaxis_entrada = pg_escape_string($_POST['profilaxis_entrada']);
        $fund_bioseguridad_entrada = pg_escape_string($_POST['bioseguridad_entrada']);

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
                $query_insertar_datos_ingreso="INSERT INTO registro_ingresos(cedula_operador, lugar_registro, persona_registra, temp_corporal_ingreso, sintoma_febril, profilaxis_entrada, bioseguridad_entrada) VALUES('{$fund_acceso_cedula_operador}', '{$fund_acceso_lugar}', '{$fund_persona_registra}', '{$fund_temp_corporal_ingreso}', '{$fund_sintoma_febril}', '{$fund_profilaxis_entrada}', '{$fund_bioseguridad_entrada}'  )";
                $STH=$DBH->query($query_insertar_datos_ingreso);

        /*         echo $query_insertar_datos_ingreso; */
            header("location:../menu.php");

            }else{
                /* Como el operador ya posee un registro de asistencias hoy le muestro una pagina indicandole que ya tiene registrada su asistencia */
                header("location:../usuario_con_registro_asistencias.php");
            }

        }
    
}else
    {
        echo "Token Invalido";
    }


?>