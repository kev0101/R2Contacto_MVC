<?php


class Conexion {

    private $server;
	private $user;
	private $password;
	private $database;
	private $conn;

    //Constructor//
    public function __construct () {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'contact';
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