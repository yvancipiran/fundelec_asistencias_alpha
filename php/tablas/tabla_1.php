<?php

$consulta = "SELECT * from vista_maestra_operadores_seguridad_hoy";

$conexion=new conexion();
$DBH=$conexion->conn_servidor_1();
$STH = $DBH->query($consulta);

while($row = $STH->fetch())
{
    echo "<tr>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['hora'] . "</td>";
        echo "<td>" . $row['cedula'] . "</td>";
        echo "<td>" . $row['nombre_apellido'] . "</td>";
        echo "<td>" . $row['sitio_entrada'] . "</td>";
        echo "<td>" . $row['piso_asignado'] . "</td>";
        echo "<td>" . $row['estatus_operador'] . "</td>";
        echo "<td>" . $row['hora_salida'] . "</td>";
        echo "<td>" . $row['sitio_salida'] . "</td>";
        echo "<td>" . $row['unidad_adscripción_operador'] . "</td>";
    echo "</tr>";
}

?>