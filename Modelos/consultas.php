<?php

require_once "conexionDB.php";
require_once "DB.php";

class Consultas{

    public static function ingresarDato ($usuario,$correo,$telefono,$asunto,$mensaje) {
		$con = new Conexion();
		$con->ejecutarActualizacion("INSERT INTO contacto (Usuario,Correo,Telefono,Asunto,Mensaje) VALUES ('$usuario->Usuario','$correo->Correo','$telefono->Telefono','$asunto->Asunto','$mensaje->Mensaje')");
		$con->cerrarConexion();
	}

}



?>