<?php

require_once "../controladores/docentes.controlador.php";
require_once "../modelos/docentes.modelo.php";

class AjaxDocentes{

	/*=============================================
	EDITAR DOCENTES
	=============================================*/	

	public $idDocente;

	public function ajaxEditarDocente(){

		$item = "id";
		$valor = $this->idDocente;

		$respuesta = ControladorDocentes::ctrMostrarDocentes($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR DOCENTES
=============================================*/	

if(isset($_POST["idDocente"])){

	$docente = new AjaxDocentes();
	$docente -> idDocente = $_POST["idDocente"];
	$docente -> ajaxEditarDocente();

}