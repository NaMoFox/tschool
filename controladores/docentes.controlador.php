<?php

class ControladorDocentes{

	/*=============================================
	CREAR DOCENTEES
	=============================================*/

	static public function ctrCrearDocente(){

		if(isset($_POST["nuevoDocente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoDocente"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])){

			   	$tabla = "docentes";

			   	$datos = array("nombres"=>$_POST["nuevoDocente"],
                               "apellidos"=>$_POST["nuevoApellidos"],
                               "tipodoc"=>$_POST["nuevoTipodoc"],
					           "documento"=>$_POST["nuevoDocumentoId"],
                               "codigo"=>$_POST["nuevoCodigo"],
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "direccion"=>$_POST["nuevaDireccion"],
					           "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);

			   	$respuesta = ModeloDocentes::mdlIngresarDocente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El docente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "docentes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El docente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "docentes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR DOCENTEES
	=============================================*/

	static public function ctrMostrarDocentes($item, $valor){

		$tabla = "docentes";

		$respuesta = ModeloDocentes::mdlMostrarDocentes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR DOCENTEES
	=============================================*/

	static public function ctrEditarDocente(){

		if(isset($_POST["editarDocente"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDocente"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["editarCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"])){

			   	$tabla = "docentes";

			   	$datos = array("id"=>$_POST["idDocente"],
			   				   "nombres"=>$_POST["editarDocente"],
                               "apellidos"=>$_POST["editarApellidos"],
                               "tipodoc"=>$_POST["editarTipodoc"],
					           "documento"=>$_POST["editarDocumentoId"],
                               "codigo"=>$_POST["editarCodigo"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);

			   	$respuesta = ModeloDocentes::mdlEditarDocente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El docente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "docentes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El docente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "docentes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR DOCENTE
	=============================================*/

	static public function ctrEliminarDocente(){

		if(isset($_GET["idDocente"])){

			$tabla ="docentes";
			$datos = $_GET["idDocente"];

			$respuesta = ModeloDocentes::mdlEliminarDocente($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El docentes ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "docentes";

								}
							})

				</script>';

			}		

		}

	}

}

