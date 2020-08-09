<?php

class conexion
{
	/**
	 * EQUIPO DE APOYO ESTRATÉGICO NACIONAL | CORPOELEC 
	 * Constructor para conectarse a bases de datos locales POSTGRESQL para PHP.
	 * @return $DBH retorna el objeto conexión para poder acceder a los datos de la BD
	 */

	function conn_servidor_1(){
        include("global.php");
        $dbname = $bd1_s1;
        $host = $servidor_1;
        $user = $usuario_s1;
        $pass = $clave_s1;
        $port = $puerto_s1;
		try {
			$DBH = new PDO("pgsql:dbname=$dbname;port=$port;host=$host;user=$user;password=$pass");
			return $DBH;
		}catch(PDOException $e){
			echo $e->getMessage();
			echo "Error al conectarse a la base de datos.";
		}
	}
	
	function conn_servidor_2(){
        include("global.php");
        $dbname = $bd1_s2;
        $host = $servidor_2;
        $user = $usuario_s2;
        $pass = $clave_s2;
        $port = $puerto_s2;
		try {
			$DBH = new PDO("pgsql:dbname=$dbname;port=$port;host=$host;user=$user;password=$pass");
			return $DBH;
		}catch(PDOException $e){
			echo $e->getMessage();
			echo "Error al conectarse a la base de datos.";
		}
	}

	/*	
	function conn_servidor_3(){
        include("global.php");
        $dbname = $bd1_s3;
        $host = $servidor_3;
        $user = $usuario_s3;
        $pass = $clave_s3;
        $port = $puerto_s3;
		try {
			$DBH = new PDO("pgsql:dbname=$dbname;port=$port;host=$host;user=$user;password=$pass");
			return $DBH;
		}catch(PDOException $e){
			echo $e->getMessage();
			echo "Error al conectarse a la base de datos.";
		}
	}
	*/

	/*	
	function conn_servidor_4(){
        include("global.php");
        $dbname = $bd1_s4;
        $host = $servidor_4;
        $user = $usuario_s4;
        $pass = $clave_s4;
        $port = $puerto_s4;
		try {
			$DBH = new PDO("pgsql:dbname=$dbname;port=$port;host=$host;user=$user;password=$pass");
			return $DBH;
		}catch(PDOException $e){
			echo $e->getMessage();
			echo "Error al conectarse a la base de datos.";
		}
	}
	*/
}

?>