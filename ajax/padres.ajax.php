<?php

require_once "../controladores/padres.controlador.php";
require_once "../modelos/padres.modelo.php";

class AjaxPadres{

	/*=============================================
	EDITAR PADRES
	=============================================*/	

	public $idPadre;

	public function ajaxEditarPadre(){

		$item = "id";
		$valor = $this->idPadre;

		$respuesta = ControladorPadres::ctrMostrarPadres($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR ADMINISTRADORES
=============================================*/	

if(isset($_POST["idPadre"])){

	$padre = new AjaxPadres();
	$padre -> idPadre = $_POST["idPadre"];
	$padre -> ajaxEditarPadre();

}