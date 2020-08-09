<?php

include "models/conexion.php";

class consultas
{

    function informacion($cedula, $tabla){
        $conexion = new conexion();
        $DBH=$conexion->conn_bd_fundelec_asistencias();
        $query_concatena_datos="SELECT CONCAT('El trabajador con cédula: ', cedula_operador, '. registro hoy su llegada a las ', to_char(hora_ingreso, 'hh:mm am'), ', por el ', lugar_registro, ' y fue registrado por el operador ', persona_registra ) AS informacion FROM {$tabla} WHERE cedula_operador = '{$cedula}' AND fecha_ingreso = NOW()::date";
        $STH=$DBH->query($query_concatena_datos);

        while($columna = $STH->fetch()){
            $informacion = $columna['informacion'];
            return $informacion;
        }

    }

    function informacion_salidas($cedula, $tabla){
        $conexion = new conexion();
        $DBH=$conexion->conn_bd_fundelec_asistencias();
        $query_concatena_datos="SELECT CONCAT('El trabajador con cédula: ', cedula_operador, '. Registro su salida hoy a las ', to_char(hora_salida, 'hh:mm am'), ', por el ', lugar_registro, ', su salida la registro el operador ', persona_registra ) AS informacion FROM {$tabla} WHERE cedula_operador = '{$cedula}' AND fecha_salida = NOW()::date";
        $STH=$DBH->query($query_concatena_datos);

        while($columna = $STH->fetch()){
            $informacion = $columna['informacion'];
            return $informacion;
        }

    }

    function datos_operador_seguridad($cedula){
        $conexion = new conexion();
        $DBH=$conexion->conn_bd_fundelec_asistencias();
        $sql_nombre_usuario = "SELECT nombres_apellidos FROM accesos_seguridad WHERE operador_usuario = '{$operador_usuario}'";
        $STH=$DBH->query($sql_nombre_usuario);

        while($columna = $STH->fetch()){
            $nombre_usuario = $columna['nombres_apellidos'];
            $_SESSION['nombre_usuario']=$nombre_usuario;
        }
    }

}


?>