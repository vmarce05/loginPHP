<?php
	function conectar()
	{
		$link = mysqli_connect("localhost", "root", "", "php_login");

		if(!$link){
			echo "Error: No se pudo establecer la conexion a la BD. ".PHP_EOL;
			echo "Error de depuracion: ". mysqli_connect_errno(). PHP_EOL;
			exit;
		}
		//echo "Exito de conexion" . PHP_EOL;
		//echo "Informacion del host: ". mysqli_get_host_info($link). PHP_EOL;
		return $link;
	}
?>
