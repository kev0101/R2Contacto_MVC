<?php

class formcontacto {
	public $Usuario;
	public $Correo;
    public $Telefono;
    public $Asunto;
    public $Mensaje;

	public function __construct () {
		$this->Usuario = "";
		$this->Correo = '';
        $this->Telefono = '';
        $this->Asunto = '';
        $this->Mensaje = '';

	}
}

?>