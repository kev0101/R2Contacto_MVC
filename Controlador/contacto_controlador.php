<?php
require_once '../modelos/DB.PHP';
require_once '../modelos/consultas.php';

switch ($_GET['a']) {
	case 'ingr':
		$u = new formcontacto();
		$c = new formcontacto();
		$t = new formcontacto();
		$a = new formcontacto();
		$m = new formcontacto();
		$u->Usuario = $_POST['_user'];
		$c->Correo = $_POST['_correo'];
		$t->Telefono = $_POST['_tel'];
		$a->Asunto = $_POST['_asunto'];
		$m->Mensaje = $_POST['_msg'];

		Consultas::ingresarDato($u,$c,$t,$a,$m);
		break;
}

header('Location: ../Vistas/');
?>