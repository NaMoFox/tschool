<?php

class ControladorPadres{

	/*=============================================
	CREAR ADMINISTRADORES
	=============================================*/

	static public function ctrCrearPadre(){

		if(isset($_POST["nuevoPadre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPadre"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["nuevoCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])){

			   	$tabla = "padres";

			   	$datos = array("nombres"=>$_POST["nuevoPadre"],
                               "apellidos"=>$_POST["nuevoApellidos"],
                               "tipodoc"=>$_POST["nuevoTipodoc"],
					           "documento"=>$_POST["nuevoDocumentoId"],
                               "codigo"=>$_POST["nuevoCodigo"],
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "direccion"=>$_POST["nuevaDireccion"],
					           "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);

			   	$respuesta = ModeloPadres::mdlIngresarPadre($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El padre ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "padres";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El padre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "padres";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR ADMINISTRADORES
	=============================================*/

	static public function ctrMostrarPadres($item, $valor){

		$tabla = "padres";

		$respuesta = ModeloPadres::mdlMostrarPadres($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR ADMINISTRADORES
	=============================================*/

	static public function ctrEditarPadre(){

		if(isset($_POST["editarPadre"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPadre"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidos"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipodoc"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarDocumentoId"]) &&
               preg_match('/^[0-9]+$/', $_POST["editarCodigo"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"])){

			   	$tabla = "padres";

			   	$datos = array("id"=>$_POST["idPadre"],
			   				   "nombres"=>$_POST["editarPadre"],
                               "apellidos"=>$_POST["editarApellidos"],
                               "tipodoc"=>$_POST["editarTipodoc"],
					           "documento"=>$_POST["editarDocumentoId"],
                               "codigo"=>$_POST["editarCodigo"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);

			   	$respuesta = ModeloPadres::mdlEditarPadre($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El padre ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "padres";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El padre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "padres";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR ADMINISTRADOR
	=============================================*/

	static public function ctrEliminarPadre(){

		if(isset($_GET["idPadre"])){

			$tabla ="padres";
			$datos = $_GET["idPadre"];

			$respuesta = ModeloPadres::mdlEliminarPadre($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El padres ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "padres";

								}
							})

				</script>';

			}		

		}

	}

}

