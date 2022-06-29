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

/*=============================================

=============================================*/
	static public function ctrCrearClase()	{

		if(isset($_POST["nuevoCodigo"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaDuracion"]) &&
			   preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoHorario"]) &&
			   preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoDocente"])){


				$tabla = "clases";
				$datos = array("codigo"=> $_POST["nuevoCodigo"],
								"nombre"=> $_POST["nuevoNombre"],
								"duracion"=> $_POST["nuevaDuracion"],
								"horario"=> $_POST["nuevoHorario"],
								"docente"=> $_POST["nuevoDocente"]);

				$respuesta = ModeloClases::mdlIngresarClases($tabla,$datos);
				if($respuesta == "ok"){
					echo '<script>

					swal({

						type: "success",
						title: "¡Clase agregada correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "crear-clases";

						}

					});
				

				</script>';
				}



			   }else{
				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "crear-clases";

						}

					});
				

				</script>';
				}
			   
		}
	}


}



