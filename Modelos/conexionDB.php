<?php


class Conexion {

    private $server;
	private $user;
	private $password;
	private $database;
	private $conn;

    //Constructor//
    public function __construct () {
        $this->server = 'bmtz9ag50yddbsehjepe-mysql.services.clever-cloud.com';
        $this->user = 'uyfaqry3gsxz1s4u';
        $this->password = 'MZ5XkdNaIggIP1maYR1V';
        $this->database = 'bmtz9ag50yddbsehjepe';
        //String de conexion a base de datos//
        $this->conn = new mysqli($this->server, $this->user, $this->password, $this->database);
    }

    public function ejecutarConsulta ($sql) {
		$contenedor = $this->conn->query($sql);
		return $contenedor->fetch_all();
	}

	public function ejecutarActualizacion ($sql) {
		$this->conn->query($sql);
	}

	public function cerrarConexion () {
		$this->conn->close();
	}



}




?>
