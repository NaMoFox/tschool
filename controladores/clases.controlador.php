<?php
/*=============================================
MOSTRAR USUARIO
=============================================*/
class ControladorClases{

	static public function ctrMostrarClases($item, $valor){
        $tabla = "clases";

		$respuesta = ModeloClases::MdlMostrarClases($tabla, $item, $valor);

		return $respuesta;
	}	


}



