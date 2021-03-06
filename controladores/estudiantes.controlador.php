<?php

class ControladorEstudiantes{

	/*=============================================
	CREAR ESTUDIANTES
	=============================================*/

	static public function ctrCrearEstudiante(){

		if(isset($_POST["nuevoEstudiante"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEstudiante"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])){

			   	$tabla = "estudiantes";

			   	$datos = array("nombres"=>$_POST["nuevoEstudiante"],
                               "apellidos"=>$_POST["nuevoApellidos"],
                               "tipodoc"=>$_POST["nuevoTipodoc"],
					           "documento"=>$_POST["nuevoDocumentoId"],
                               "codigo"=>$_POST["nuevoCodigo"],
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "direccion"=>$_POST["nuevaDireccion"],
					           "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);

			   	$respuesta = ModeloEstudiantes::mdlIngresarEstudiante($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El estudiante ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "estudiantes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El estudiante no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "estudiantes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR ESTUDIANTES
	=============================================*/

	static public function ctrMostrarEstudiantes($item, $valor){

		$tabla = "estudiantes";

		$respuesta = ModeloEstudiantes::mdlMostrarEstudiantes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR ESTUDIANTE
	=============================================*/

	static public function ctrEditarEstudiante(){

		if(isset($_POST["editarEstudiante"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEstudiante"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["editarCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"])){

			   	$tabla = "estudiantes";

			   	$datos = array("id"=>$_POST["idEstudiante"],
			   				   "nombres"=>$_POST["editarEstudiante"],
                               "apellidos"=>$_POST["editarApellidos"],
                               "tipodoc"=>$_POST["editarTipodoc"],
					           "documento"=>$_POST["editarDocumentoId"],
                               "codigo"=>$_POST["editarCodigo"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);

			   	$respuesta = ModeloEstudiantes::mdlEditarEstudiante($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El estudiante ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "estudiantes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El estudiante no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "estudiantes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR ESTUDIANTE
	=============================================*/

	static public function ctrEliminarEstudiante(){

		if(isset($_GET["idEstudiante"])){

			$tabla ="estudiantes";
			$datos = $_GET["idEstudiante"];

			$respuesta = ModeloEstudiantes::mdlEliminarEstudiante($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El estudiantes ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "estudiantes";

								}
							})

				</script>';

			}		

		}

	}

}

