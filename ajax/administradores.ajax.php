<?php

require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class AjaxAdministradores{

	/*=============================================
	EDITAR ADMINISTRADORES
	=============================================*/	

	public $idAdministrador;

	public function ajaxEditarAdministrador(){

		$item = "id";
		$valor = $this->idAdministrador;

		$respuesta = ControladorAdministradores::ctrMostrarAdministradores($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR ADMINISTRADORES
=============================================*/	

if(isset($_POST["idAdministrador"])){

	$administrador = new AjaxAdministradores();
	$administrador -> idAdministrador = $_POST["idAdministrador"];
	$administrador -> ajaxEditarAdministrador();

}