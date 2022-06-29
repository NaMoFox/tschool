<?php

require_once "../controladores/estudiantes.controlador.php";
require_once "../modelos/estudiantes.modelo.php";

class AjaxEstudiantes{

	/*=============================================
	EDITAR ESTUDIANTES
	=============================================*/	

	public $idEstudiante;

	public function ajaxEditarEstudiante(){

		$item = "id";
		$valor = $this->idEstudiante;

		$respuesta = ControladorEstudiantes::ctrMostrarEstudiantes($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR ESTUDIANTE
=============================================*/	

if(isset($_POST["idEstudiante"])){

	$estudiante = new AjaxEstudiantes();
	$estudiante -> idEstudiante = $_POST["idEstudiante"];
	$estudiante -> ajaxEditarEstudiante();

}