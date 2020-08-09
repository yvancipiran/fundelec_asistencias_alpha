<?php

class conexion
{
	/**
	 * EQUIPO DE APOYO ESTRATÉGICO NACIONAL | CORPOELEC 
	 * Constructor para conectarse a bases de datos locales POSTGRESQL para PHP.
	 * @return $DBH retorna el objeto conexión para poder acceder a los datos de la BD
	 */

	function conn_bd_fundelec_asistencias(){
		$dbname="asistencias";
		$host="localhost";
		$user="postgres";
		$pass="Lunes35.";

		try {
			$DBH = new PDO("pgsql:dbname=$dbname;port=5432;host=$host;user=$user;password=$pass");
			return $DBH;
		}

		catch(PDOException $e){
			echo $e->getMessage();
			echo "Error al conectarse a la base de datos.";
		}
	}

}

?>