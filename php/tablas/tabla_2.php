<?php

$consulta = "SELECT * from nombre_vista";
                            
$conexion=new conexion();
$DBH=$conexion->conn_servidor_2();
$STH = $DBH->query($consulta);

while($row = $STH->fetch())
{
    echo "<tr>";
        echo "<td>" . $row['nombre_campo1'] . "</td>";
        echo "<td>" . $row['nombre_campo2'] . "</td>";
        echo "<td>" . $row['nombre_campo3'] . "</td>";
        echo "<td>" . $row['nombre_campo4'] . "</td>";
        echo "<td>" . $row['nombre_campo5'] . "</td>";
        echo "<td>" . $row['nombre_campo6'] . "</td>";
    echo "</tr>";
}

?>